<?php

require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Products;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'all-products')
    {
        $category = new \App\classes\Category();
        $categories = $category->category();

        $product = new Products();
        $products = $product->index();
        include 'pages/all-products.php';
    }
    elseif ($_GET['pages'] == 'category-products')
    {
        $category = new \App\classes\Category();
        $categories = $category->category();
        $product = new Products();
        $products = $product->shortProducts($_GET['category_id']);
        include 'pages/all-products.php';
    }
    elseif ($_GET['pages'] == 'product-details')
    {
        $category = new Category();
        $categories = $category->category();
        $product = new Products();
        $productDetails = $product->getProductDetails($_GET['product_id']);
        include 'pages/productDetails.php';
    }
}