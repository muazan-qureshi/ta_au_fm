<?php
include('header.php');

  $object->administrator();
?>

  <section class="container">
    <form class="form" action="" method="post" enctype="multipart/form-data">
      <h3 class="text-dark py-3">
        Add Administrator
      </h3>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="">Full Name</label>
          <input type="text" name="fullname" required class="form-control" placeholder="Enter Full Name">
        </div>
        <div class="form-group col-md-6">
          <label for="">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
        </div>
        <div class="form-group col-md-6">
          <label for="">CNIC</label>
          <input type="text" name="cnic" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" required class="form-control" placeholder="e.g 12345-1234567-1">
          <!-- <input type="tel" id="inputcnic" class="form-control" required="true" minlength="15" maxlength="15" placeholder="_____/_______/_"> -->
        </div>
        <div class="form-group col-md-6">
          <label for="">Father Name</label>
          <input type="text" name="fathername" class="form-control" placeholder="Enter Father Name" required>
        </div>
        <div class="form-group col-md-6">
          <label for="">Email Address</label>
          <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
        </div>
        <div class="form-group col-md-6">
          <label for="">Phone Number</label>
          <input type="tel" name="phone" class="form-control" placeholder="Enter Phone Number (e.g +923001234567)" required>
        </div>
        <div class="form-group col-md-6">
          <label for="">Enter Password</label>
          <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required class="form-control" placeholder="Enter Strong Password (e.g 123*Abc)">
        </div>
        <div class="form-group col-md-6">
            <label for="">Location</label>
            <select class="form-control" name="location" id="" required>
                <option selected>Location</option>
                <option>Karachi, Pakistan (KHI)</option>
                <option>Islamabad, Pakistan (ICT)</option>
                <option>Lahore, Pakistan (LHR)</option>
                <option>Peshawar, Pakistan (PEW)</option>
                <option>Quetta, Pakistan (UET)</option>
            </select>
        </div>
        <div class="form-group col-md-6">
          <label for="">Date of Birth</label>
          <input type="date" name="dob" class="form-control" required placeholder="">
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
        <div class="form-group col-md-12">
          <label for="">Enter Complete Address</label>
          <textarea name="address" class="form-control" required rows="2" placeholder="Enter Complete Address" cols="80"></textarea>
        </div>
        <div class="form-group col-md-12">
          <label for="">Profile Picture</label>
          <input type="file" name="profile" class="form-control" required>
        </div>
        <button type="submit" class="btn-block btn btn-primary" name="add_admin">
          Add Agent
        </button>
      </div>
    </form>
  </section>
<br>
<?php include('footer.php'); ?>
