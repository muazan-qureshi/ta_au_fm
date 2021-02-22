<?php include('header.php');

?>

<section>
    <table class="table">
        <thead>
            <tr>
                <th>SR No</th>
                <th>ID</th>
                <th>Product Name</th>
                <th>Code</th>
                <th>Stock</th>
                <th>Buy price</th>
                <th>Sale Price</th>
                <th>Category</th>

                <th>Create by</th>
                <th>Create Date & Time</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $srno = 1;
            foreach ($object->getproducts() as $pro) {

                echo ('<tr>
                <td>' . $srno . '</td>
                <td>' . $pro['id'] . '</td>
                <td>' . $pro['name'] . '</td>
                <td>' . $pro['code'] . '</td>
                <td>' . $pro['stock'] . '</td>
                <td>' . $pro['buyprice'] . '</td>
                <td>' . $pro['saleprice'] . '</td>
                <td>' . $pro['category'] . '</td>
                <td>' . $pro['createby'] . '</td>
                <td>' . $pro['createDT'] . '</td>
                <td>' . $pro['description'] . '</td>
            </tr>');
                $srno++;
            }
            ?>
        </tbody>
    </table>
</section>


<?php include('footer.php');

?>