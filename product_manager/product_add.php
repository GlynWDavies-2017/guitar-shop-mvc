<?php include '../view/header.php' ?>
<main>
    <h1>Add Product</h1>
    <form action="index.php" method="POST" id="add_product_form">
        <input type="hidden" name="action" value="add_product">
        <label>Category</label>
        <select name="category_id" id="category_id">
            <?php foreach($categories as $category):?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName'];?>
                </option>
            <?php endforeach;?>
        </select>
        <br>
        <label for="code">Code:</label>
        <input type="text" name="code">
    </form>
</main>
<?php include '../view/footer.php' ?>