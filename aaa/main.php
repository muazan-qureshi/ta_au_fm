<?php session_start();

// Class begins here
// class Name = divi

class divi
{
    // connection starts here
    function connection()
    {
        $connect = mysqli_connect('localhost', 'root', '', 'divisma');
        return $connect;
    } //connection end here

    // For user admin login
    function userlogin()
    {
        if (isset($_POST['login_btn'])) {
            $pwd = $_POST['pwd'];
            $e = $_POST['email'];
            $sql = "SELECT `id`, `fullname`, `email`, `password` FROM `users` WHERE email = '$e' AND password = '$pwd'";
            $query = mysqli_query($this->connection(), $sql);

            $count = mysqli_num_rows($query);

            if ($count == 1) {
                $_SESSION['liveuser'] = $_POST['email'];
                echo ('<script>window.location.href="index.php"</script>');
            } else {
                echo ('<script>alert("Sorry Some Thing is Wrong")</script>');
            }
        }
    } //login add here

    // live user details
    function user_live()
    {
        $a = $_SESSION['liveuser'];
        $sql = "SELECT * FROM `users` WHERE email = '$a'";
        $query = mysqli_query($this->connection(), $sql);
        return $query;
    }

    // get role type for add user form
    function roletype_get()
    {
        $sql = "SELECT * FROM `roletype`";
        $query = mysqli_query($this->connection(), $sql);
        return $query;
    }


    // Add new user from form to database
    function adduser()
    {
        if (isset($_POST['adduser_btn'])) {
            $fname = $_POST['fullname'];
            $uname = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $pwd = $_POST['password'];
            $cpwd = $_POST['cpassword'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $role = $_POST['role'];
            $photo = $_FILES['photo']['name'];
            $address = $_POST['address'];

            if ($pwd == $cpwd) {
                $sql = "INSERT INTO `users`(`fullname`, `username`, `email`, `phone`, `password`, `gender`, `dob`,  `roletype`, `address`, `image`) VALUES ('$fname','$uname','$email','$phone','$pwd','$gender','$dob','$role','$address','$photo')";
                $query = mysqli_query($this->connection(), $sql);
                // return $query;
                move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/users/" . $photo);
                if (!$query) {
                    echo ('<script>alert("Sorry Some Thing is Wrong")</script>');
                } else {
                    echo ('<script>alert("Done! User Added Successfully")</script>');
                }
            } else {
                echo ('<script>alert("Sorry Some Thing is Wrong")</script>');
            }
        }
    } //adduser end

    //for addind a category
    function category_add()
    {
        if (isset($_POST['addcat_btn'])) {
            $catname = $_POST['addcat'];

            foreach ($this->user_live() as $ab) {
                $id = $ab['id'];
            }


            $sql = "INSERT INTO `category`(`name`, `createby`) VALUES ('$catname','$id')";
            $query = mysqli_query($this->connection(), $sql);

            if (!$query) {
                echo ('<script>alert("Sorry Some Thing is Wrong")</script>');
            } else {
                echo ('<script>alert("category added")</script>');
            }
        }
    }

    // Gety category for add products table
    function getcategory()
    {
        // foreach ($this->user_live() as $ab) {
        //     $id = $ab['id'];
        // }
        $sql = "SELECT `id`, `name`, `createby`, `ceateDT` FROM `category`";
        $query = mysqli_query($this->connection(), $sql);
        return $query;
    }

    // add a new product
    function product_add()
    {
        if (isset($_POST['addproduct_btn'])) {
            $name = $_POST['pname'];
            $code = $_POST['pcode'];
            $sale = $_POST['saleprice'];
            $buy = $_POST['buyprice'];
            $catalog = $_POST['catalog'];
            $stock = $_POST['pstock'];
            $desc = $_POST['pdesc'];
            $img_name = $_FILES['photo']['name'];
            // $tmp_img = $_POST['photo']['tmp_name'];

            foreach ($this->user_live() as $ab) {
                $userid = $ab['id'];
            }

            $jsonimg = json_encode($img_name);


            $sql = "INSERT INTO `products`(`name`, `code`, `description`, `stock`, `buyprice`, `saleprice`, `category`, `createby`, `image`) VALUES ('$name','$code','$desc','$stock','$buy','$sale','$catalog','$userid','$jsonimg')";
            $query = mysqli_query($this->connection(), $sql);

            $count = count($_FILES['photo']['name']);

            for ($i = 0; $i < $count; $i++) {
                $tmp_path = $_FILES['photo']['tmp_name'][$i];
                $org_path = 'uploads/products/' . $_FILES['photo']['name'][$i];
                move_uploaded_file($tmp_path, $org_path);
            }


            // $countimg = count($_FILES['photo']['name']);


            // for ($i = 0; $i > $countimg; $i++) {
            //     // echo ('move_uploaded_file(' . $_FILES['photo']['tmp_name'] . ',uploads/products/' . $_FILES['photo']['name'] . ')');
            //     $tmp_path = $_FILES['photo']['tmp_name'][$i];
            //     $org_path = "uploads/products/" . $_FILES['photo']['name'][$i];
            //     move_uploaded_file($tmp_path, $org_path);
            // }

            if (!$query) {
                echo ('<script>alert("Sorry Some Thing is Wrong")</script>');
            } else {
                echo ('<script>alert("Product added")</script>');
            }
        }
    } //product_add()

    //Get user data
    function getusersdata()
    {
        $sql = "SELECT * FROM `users`";
        $query = mysqli_query($this->connection(), $sql);
        return $query;
    } // data for users table


    //GEt products
    function getproducts()
    {
        $sql = "SELECT * FROM `products`";
        $query = mysqli_query($this->connection(), $sql);
        return $query;
    }
} //class end here

$object = new divi;
