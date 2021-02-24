<?php include('header.php'); ?>

<section>
  <h3>
    All Agents
  </h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sr No</th>
        <th>ID</th>
        <th>Full Name</th>
        <th>Username</th>
        <th>CNIC</th>
        <th>EMail</th>
        <th>Phone</th>
        <th>Father Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Company</th>
        <th>Location</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $srno = 1;
      foreach ($object->agentsinfo() as $agent) {
      ?>
        <tr>
          <td><?php echo $srno ?></td>
          <td><?php echo $agent['id'] ?></td>
          <td><?php echo $agent['fullname'] ?></td>
          <td><?php echo $agent['username'] ?></td>
          <td><?php echo $agent['cnic'] ?></td>
          <td><?php echo $agent['email'] ?></td>
          <td><?php echo $agent['phone'] ?></td>
          <td><?php echo $agent['fathername'] ?></td>
          <td><?php echo $agent['dob'] ?></td>
          <td><?php echo $agent['gender'] ?></td>
          <td><?php echo $agent['company'] ?></td>
          <td><?php echo $agent['location'] ?></td>
          <td><?php echo $agent['address'] ?></td>
        </tr>
      <?php
        $srno++;
      }
      ?>
    </tbody>
  </table>
</section>

<?php include('footer.php'); ?>