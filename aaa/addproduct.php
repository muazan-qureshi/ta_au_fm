<?php include('header.php');
$object->product_add();
?>

<section class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="row">
        <div class="form-group col-md-6">
            <label for="">Product Name</label>
            <input type="text" class="form-control" name="pname" required id="" aria-describedby="helpId" placeholder="Enter Product Name">
        </div>
        <div class="form-group col-md-6">
            <label for="">Product Code</label>
            <input type="text" class="form-control" name="pcode" required id="" aria-describedby="helpId" placeholder="Product Code (e.g nokia-1001)">
        </div>
        <div class="form-group col-md-6">
            <label for="">Sale Price</label>
            <input type="text" class="form-control" name="saleprice" required id="" aria-describedby="helpId" placeholder="Sale Price">
        </div>
        <div class="form-group col-md-6">
            <label for="">Buy Price</label>
            <input type="text" class="form-control" name="buyprice" required id="" aria-describedby="helpId" placeholder="Buy Price">
        </div>
        <div class="form-group col-md-6">
            <label for="">Catalog</label>
            <select class="form-control" required name="catalog" id="">
                <option selected>Please Select a Category</option>
                <?php
                foreach ($object->getcategory() as $catname) {
                    // echo ('<option value="'.$catname['id']."'>'.$catname['name'].'</option>');
                    echo ('<option value="' . $catname['id'] . '">' . $catname['name'] . '</option>');
                }
                ?>

            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="">Stock</label>
            <input type="text" class="form-control" required name="pstock" id="" aria-describedby="helpId" placeholder="Product Stock (Quantity left)">
        </div>
        <div class="form-group col-md-12">
            <label for="">Photo</label>
            <input type="file" name="photo[]" required multiple="true" class="form-control" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group col-md-12">
            <label for="">Product Description</label>
            <textarea type="text" class="form-control" required name="pdesc" id="" aria-describedby="helpId" placeholder="Enter Product Full Description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block mx-3" name="addproduct_btn">
            Add Product
        </button>
    </form>
</section>




<?php include('footer.php');

?>