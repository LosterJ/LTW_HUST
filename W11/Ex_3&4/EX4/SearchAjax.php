<?php
    $products = array(
        "iPhone 14 Pro Max 128GB",
        "Samsung Galaxy S20 FE",
        "OPPO Reno8 Z 5G",
        "Vivo Y53",
        "Xiaomi Redmi Note 11 Pro",
        "Samsung Galaxy A23 6GB",
        "iPhone 11",
        "Nokia C30",
        "Xiami Redmi 10A",
        "OPPO A57 128GB",
        "iPhone 14 Pro 256GB"
    );

    if (isset($_GET["product-name"]) && $_GET["product-name"] !== "") {
        $productName = $_GET["product-name"];
        foreach($products as $product) {
            if (stripos($product, $productName) !== false) {
                echo "$product<br>";
            }
        }
    }
?>