<?php include('header.php');

?>
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_7.jpg');">
    <br>
    <br><br><br><br>
    <h1 style="font-weight: 600;" class="text-center text-white">
        Register Your Account
    </h1>
    <div class="col-md-6 pr-md-5 m-auto">
        <form action="" method="POST">
            <div class="form-group py-2">
                <input type="text" name="fullname" class="form-control" placeholder="Full Name">
            </div>
            <div class="form-group py-2">
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group py-2">
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group py-2">
                <input type="tel" name="phone" class="form-control" placeholder="Enter Phone (e.g +92 300 123 4567)">
            </div>
            <div class="form-group py-2">
                <input type="password" name="password" class="form-control" placeholder="Enter a strong Password (e.g 1234*Abc)">
            </div>
            <div class="row">
                <div class="form-group py-2 col-md-6">
                    <label for="" class="text-white">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" placeholder="Enter a strong Password (e.g 1234*Abc)">
                </div>
                <div class="form-group py-2 col-md-6">
                    <label for="" class="text-white">Gender</label>
                    <select class="form-control" name="gender" id="">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Custom</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Register" name="vquery_btn" class="btn btn-primary py-3 px-5">
            </div>
            <p class="text-center text-white">
                Already have an Account <a href="">Click Here to Login</a>
            </p>
        </form>
    </div>

</div>

<?php
include('footer.php');
?>