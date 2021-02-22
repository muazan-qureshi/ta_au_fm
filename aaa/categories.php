<?php include('header.php');

?>


<section class="container">
    <table class="table bg-white">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Create By</th>
                <th>Create Date & Time</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $srno = 1;
            foreach ($object->getcategory() as $categ) {
            ?>
                <tr>
                    <td><?php echo $srno ?>
                    </td>
                    <td><?php echo $categ['id'] ?>
                    </td>
                    <td><?php echo $categ['name'] ?>
                    </td>
                    <td><?php echo $categ['createby'] ?>
                    </td>
                    <td><?php echo $categ['ceateDT'] ?>
                    </td>
                </tr>
            <?php
                $srno++;
            }

            ?>
        </tbody>
    </table>
</section>



<?php include('footer.php');

?>