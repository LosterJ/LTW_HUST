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
table, td {
    border: 1px solid black;
}
table {
    border-collapse: separate;
    border-spacing: 0px;
}
img {
    height: auto;
    width: 10rem;
}
</style>
<body>
    <p>View Shopping Cart</p>
    <table>
        <tr>
            <td></td>
            <td><p>Software Title</p></td>
            <td><p>Price</p></td>
        </tr>
        <?php
            include 'Product.php';
            $product = new Product();
            $items = $product->getCartList();
            foreach($items as $item){
        ?>
        <tr>
            <td><p><img src="image/<?php echo $item['image'] ?>" alt=""></p></td>
            <td><p><?php echo $item['name'] ?></p>
                <form method="post" name="DeleteCartForm">
                    <input type="hidden" name="action" value="DeleteCartForm">
                    <input type="hidden" name="cart_id" value="<?php echo $item['cartId'] ?>">
                    <button type="submit">Remove</button>
                </form>
            </td>
            <?php 
                if($item['price'] == 0){
                    echo '<td><p>FREE!</p></td>';
                }
                else
                    echo '<td><p>'.$item['price'].'</p></td>';
            ?>
        </tr>
        <?php
            }
        ?>
    </table>

    <a href="index.php"><button style="margin-top: 1rem">Continue Shopping</button></a>
</body>
</html>

<script src="cart.js"></script>