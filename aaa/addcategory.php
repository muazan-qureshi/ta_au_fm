<?php include('header.php');

$object->category_add();

?>


<section class="container pb-5">

    <form action="" method="POST" class="p-3 col-md-6 bg-white">
        <h1 class="pb-4">
            Add Category
        </h1>
        <div class="form-group">
            <label for="">Add Your New Category</label>
            <input type="text" class="form-control" name="addcat" id="" aria-describedby="helpId" placeholder="Add Category Name">
        </div>
        <button class="btn btn-primary" name="addcat_btn" type="submit">
            Add
        </button>
    </form>

</section>


<?php include('footer.php');

?>