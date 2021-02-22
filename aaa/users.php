<?php include('header.php');

?>


<section class="">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Id</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date Of Birth</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Create Date & Time</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sr = 1;
            foreach ($object->getusersdata() as $userdata) {
            ?>
                <tr>
                    <td><?php echo $sr; ?></td>
                    <td><?php echo $userdata['id']; ?></td>
                    <td><?php echo $userdata['fullname']; ?></td>
                    <td><?php echo $userdata['username']; ?></td>
                    <td><?php echo $userdata['email']; ?></td>
                    <td><?php echo $userdata['phone']; ?></td>
                    <td><?php echo $userdata['dob']; ?></td>
                    <td><?php echo $userdata['gender']; ?></td>
                    <td><?php echo $userdata['address']; ?></td>
                    <td><?php echo $userdata['createDT']; ?></td>
                </tr>

            <?php
                $sr++;
            }

            ?>
        </tbody>
    </table>
</section>



<?php include('footer.php');

?>