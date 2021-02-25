<?php session_start();

// class start Here
class ta_au_fy
{
  // Connection start here
  function connection()
  {
    $connect = mysqli_connect('localhost', 'root', '', 'ta_au_fm');
    return $connect;
  }
  // Connection end here

  // admin login
  function adminlogin()
  {
    if (isset($_POST['admin_login'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM `admins` WHERE email = '$email' AND password = '$password'";
      $query = mysqli_query($this->connection(), $sql);
      // return $query;

      $count = mysqli_num_rows($query);

      if ($count == 1) {
        $_SESSION['liveadmin'] = $_POST['email'];
        echo "<script>window.location.href='index.php'</script>";
      } else {
        echo "<script>alert('Sorry Something is Wrong')</script>";
      }
    }
  }
  // admin login end here

  // for user live info
  function user_live()
  {
    $a = $_SESSION['liveadmin'];
    $sql = "SELECT * FROM `admins` WHERE email = '$a'";
    $query = mysqli_query($this->connection(), $sql);
    return $query;
  }

  // admin Administrator to database
  function administrator()
  {
    if (isset($_POST['add_admin'])) {
      $fullname = $_POST['fullname'];
      $username = $_POST['username'];
      $cnic = $_POST['cnic'];
      $father = $_POST['fathername'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $password = $_POST['password'];
      $location = $_POST['location'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];
      $profile = $_FILES['profile']['name'];

      move_uploaded_file($_FILES['profile']['tmp_name'], 'uploads/admins/' . $_FILES['profile']['name']);

      $sql = "INSERT INTO `admins`(`fullname`, `username`, `cnic`, `fathername`, `email`, `phone`, `password`, `location`, `dob`, `gender`, `address`, `profilepicture`) VALUES
      ('$fullname','$username','$cnic','$father','$email','$phone','$password','$location','$dob','$gender','$address','$profile')";
      $query = mysqli_query($this->connection(), $sql);
      // return $query;
      if (!$query) {
        echo "<script>alert('Sorry Something is Wrong')</script>";
      } else {
        echo "<script>alert('Admin Added Succesfully')</script>";
      }
    }
  } //adminstrator function end here

  // function for add agents to tabele----------------------------------------------------------------------------------------------------------------------------------------------------------
  function agents()
  {
    if (isset($_POST['add_agent'])) {
      $fname = $_POST['fullname'];
      $uname = $_POST['username'];
      $cnic = $_POST['cnic'];
      $father = $_POST['fathername'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $pwd = $_POST['password'];
      $cpwd = $_POST['cpassword'];
      $location = $_POST['location'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];
      $profile = $_FILES['profile']['name'];
      $company = $_POST['company'];

      foreach ($this->user_live() as $ab) {
        $uid = $ab['id'];
      }

      if ($pwd == $cpwd) {
        $sql = "INSERT INTO `agents`(`fullname`, `username`, `cnic`, `fathername`, `email`, `phone`, `password`, `company`, `location`, `dob`, `gender`, `address`, `profilepicture`,`createby`) VALUES
                                    ('$fname','$uname','$cnic','$father','$email','$phone','$pwd','$company','$location','$dob','$gender','$address','$profile','$uid')";
        $query = mysqli_query($this->connection(), $sql);
        // return $query;
        move_uploaded_file($_FILES['profile']['tmp_name'], 'uploads/agents/' . $_FILES['profile']['name']);


        if (!$query) {
          echo "<script>alert('Sorry Something is Wrong')</script>";
        } else {

          echo "<script>alert('Agent Added Succesfully')</script>";
        }
      } else {
        move_uploaded_file($_FILES['profile']['tmp_name'], 'uploads/agents/' . $_FILES['profile']['name']);
        echo "<script>alert('Agent Added Succesfully')</script>";
      }
    }
  }


  // getting Agents detail for agents table
  function agentsinfo()
  {
    $sql = "SELECT * FROM agents";
    $query = mysqli_query($this->connection(), $sql);
    return $query;
  }//dunction end here


  // function for getting visitors query
  function visitor_query()
  {
    $sql = "SELECT * from visitorquery";
    $query = mysqli_query($this->connection(), $sql);
    return $query;
  }
  // visitor query function end here


  
} // class "auction_tours" end here

$object = new ta_au_fy;
