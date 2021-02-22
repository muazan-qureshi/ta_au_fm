<?php include('header.php');

// include('main.php');

$object->adduser();

?>


<section class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="row">
        <div class="form-group col-md-6">
            <label for="">Full Name</label>
            <input type="text" class="form-control" name="fullname" id="" aria-describedby="helpId" placeholder="Enter Your Full Name" required>
        </div>
        <div class="form-group col-md-6">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="Username" required>
        </div>
        <div class="form-group col-md-6">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Email Address" required>
        </div>
        <div class="form-group col-md-6">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="Phone Number" required>
        </div>
        <div class="form-group col-md-6">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Enter a Strong Password" required>
        </div>
        <div class="form-group col-md-6">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control" name="cpassword" id="" aria-describedby="helpId" placeholder="Confirm Your Password" required>
        </div>
        <div class="form-group col-md-6">
            <label for="">Date of Birth</label>
            <input type="date" class="form-control" name="dob" id="" aria-describedby="helpId" placeholder="" required>
        </div>
        <div class="form-group col-md-6">
            <label for="">Gender</label>
            <select class="form-control" name="gender" id="" required>
                <option selected>Select Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Custom</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="">Role</label>
            <select class="form-control" name="role" id="">
                <option selected>Select Role Type</option>
                <?php
                foreach ($object->roletype_get() as $cat) {
                    echo ('<option value="' . $cat['id'] . '">' . $cat['role'] . '</option>');
                }
                ?>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="">Photo</label>
            <input type="file" required class="form-control" name="photo" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="">Address</label>
            <textarea type="text" required class="form-control" name="address" id="" aria-describedby="helpId" placeholder="Enter Full Address"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block mx-3" name="adduser_btn">
            Add User
        </button>
    </form>
</section>



<?php include('footer.php');

?>