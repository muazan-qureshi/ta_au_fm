<?php include('header.php');

$object->visitor_query();

?>

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
      </div>
    </div>
  </div>
</div>
<section class="ftco-section contact-section ftco-degree-bg">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h4">Contact Information</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3">
        <p><span>Address:</span> Progressive Center, suite # 202-203, 30-A Shahrah-e-Faisal, Karachi, 75400</p>
      </div>
      <div class="col-md-3">
        <p><span>Phone:</span> <a href="tel://1234567920">+92 301 030 1642</a></p>
      </div>
      <div class="col-md-3">
        <p><span>Email:</span> <a href="/cdn-cgi/l/email-protection#b6dfd8d0d9f6cfd9c3c4c5dfc2d398d5d9db"><span class="__cf_email__" data-cfemail="076e696168477e687275746e73622964686a">info@tripntours.com</span></a></p>
      </div>
      <div class="col-md-3">
        <p><span>Website</span> <a href="#">www.tripntour.com</a></p>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-6 pr-md-5">
        <form action="" method="POST">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" name="vquery_btn" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
      <div class="col-md-6" id="map"></div>
    </div>
  </div>
</section>
<?php include('footer.php');

?>