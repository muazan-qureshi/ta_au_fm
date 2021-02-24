<?php include('header.php');

foreach ($object->user_live() as $live) {
    $livename = $live['fullname'];
    $liveuser = $live['username'];
    $liveemail = $live['email'];
    $livephoto = $live['profilepicture'];
    $livefather = $live['fathername'];
    $livephone = $live['phone'];
    $livedob = $live['dob'];
    $livegender = $live['gender'];
    $liveaddress = $live['address'];
    $livelocation = $live['location'];
}


?>

<section class="container-fluid">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Location</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $livename; ?></td>
                <td><?php echo $liveuser; ?></td>
                <td><?php echo $liveemail; ?></td>
                <td><?php echo $livephone; ?></td>
                <td><?php echo $livegender; ?></td>
                <td><?php echo $livedob; ?></td>
                <td><?php echo $livelocation; ?></td>
                <td><?php echo $liveaddress; ?></td>
            </tr>
        </tbody>
    </table>
</section>


<?php include('header.php'); ?>