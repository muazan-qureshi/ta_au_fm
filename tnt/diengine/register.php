<?php include('header.php');

?>
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <br>
    <br><br><br><br>
    <h1 style="font-weight: 600;" class="text-center text-white">
        Register Your Acccount
    </h1>
    <div class="col-md-6 pr-md-5 m-auto">
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
                <input type="password" name="subject" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="submit" value="Send Message" name="vquery_btn" class="btn btn-primary py-3 px-5">
            </div>
        </form>
    </div>

</div>

<?php
include('footer.php');
?>