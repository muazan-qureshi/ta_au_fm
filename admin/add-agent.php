<?php include('header.php'); ?>

  <section class="container">
    <form class="form" action="" method="post">
      <div class="row">
        <div class="form-group col-md-6">
          <label for="">Full Name</label>
          <input type="text" name="" required class="form-control" placeholder="Enter Full Name">
        </div>
        <div class="form-group col-md-6">
          <label for="">Username</label>
          <input type="text" name="" class="form-control" placeholder="Enter Username" required>
        </div>
        <div class="form-group col-md-6">
          <label for="">CNIC</label>
          <input type="text" name="" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" required class="form-control" placeholder="e.g 12345-1234567-1">
          <!-- <input type="tel" id="inputcnic" class="form-control" required="true" minlength="15" maxlength="15" placeholder="_____/_______/_"> -->
        </div>
        <div class="form-group col-md-6">
          <label for="">Father Name</label>
          <input type="text" name="" class="form-control" placeholder="Enter Father Name" required>
        </div>
        <div class="form-group col-md-6">
          <label for="">Email Address</label>
          <input type="email" name="" class="form-control" placeholder="Enter Email Address" required>
        </div>
        <div class="form-group col-md-6">
          <label for="">Phone Number</label>
          <input type="tel" name="" class="form-control" placeholder="Enter Phone Number" required>
        </div>
        <div class="form-group col-md-6">
          <label for="">Enter Password</label>
          <input type="password" name="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required class="form-control" placeholder="Enter Strong Password (e.g 123*Abc)">
        </div>
        <div class="form-group col-md-6">
            <label for="">Location</label>
            <select class="form-control" name="gender" id="" required>
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
          <input type="date" name="" class="form-control" required placeholder="Enter Full Name">
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
          <textarea name="name" class="form-control" required rows="2" placeholder="Enter Complete Address" cols="80"></textarea>
        </div>
        <button type="submit" class="btn-block btn btn-primary" name="button">
          Add Agent
        </button>
      </div>
    </form>
  </section>
<br>
<?php include('footer.php'); ?>
