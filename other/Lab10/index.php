<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<style>
img {
    height: auto;
    width: 15rem;
}
</style>
<body>
    <div id="search_bar">
        <form method="post">
            <select name="item_id">
                <?php
                    include 'Product.php';
                    $product = new Product();
                    $items = $product->getItemList();
                    foreach($items as $item){
                ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                <?php
                    }
                ?>
            </select>
            <button type="submit">Go</button>
        </form>
    </div>

    <?php
        if(isset($_POST['item_id'])){

    ?>

    <div id="product_detail" style="margin-top: 2rem;">
        <p>Product Details</p>
        <div class="row">
            <div class="col-7" style="border: 2px solid black; padding: 3rem">
                <?php $items = $product->getItem($_POST['item_id']);
                    foreach($items as $item){
                ?>
                    <p><span>Product Name:  </span><span><?php echo $item['name'] ?></span></p>
                    <p><span>Publisher:  </span><span><?php echo $item['publisher'] ?></span></p>
                    <p><span>SKU: </span><span><?php echo $item['sku'] ?></span></p>
                    <p><span>Platform:  </span><span><?php echo $item['platform'] ?></span></p>
                    <?php 
                        if($item['price'] == 0){
                            echo '<p><span>Price:  </span><span>FREE!</span></p>';
                        }
                        else
                            echo '<p><span>Price:  </span><span>'.$item['price'].'</span></p>';
                    ?>

            </div>
            <div class="col-5" style="border: 2px solid black; display: flex; justify-content: center; align-items: center; padding: 3rem">
                    <img src="image/<?php echo $item['image'] ?>" alt="">
                        
                <?php
                    }
                ?>

            </div>
        </div>
    </div>
    <form method="post" id="AddToCartForm" name="AddToCartForm">
        <input type="hidden" name="action" value="AddToCartForm">
        <input type="hidden" name="item_id" value="<?php echo $item['id'] ?>">
        <button type="submit" style="margin-top: 2rem">Add To Cart</button>
    </form>
    
    <?php
        }
    ?>

    <a href="cart.php"><button style="margin-top: 1rem">View Cart</button></a>

</body>
</html>

<script src="cart.js"></script>