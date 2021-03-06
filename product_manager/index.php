<?php 

    require('../model/database.php');
    require('../model/product_db.php');
    require('../model/category_db.php');

    $action = filter_input(INPUT_POST, 'action');
    if($action == NULL) {
        $action = filter_input(INPUT_GET,'action');
        if($action == NULL) {
            $action = 'list_products';
        }
    }

    if($action == 'list_products') {
        $category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
        if($category_id == NULL || $category_id == FALSE) {
            $category_id = 1;
        }
        $category_name = get_category_name($category_id);
        $categories = get_categories();
        $products = get_products_by_category($category_id);
        include('product_list.php');
    } else if($action == 'delete_product') {
        // TODO...
    } else if($action == 'show_add_form') {
        $categories = get_categories();
        include('product_add.php');
    }

?>