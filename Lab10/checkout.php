<?php
    session_start();
    $total_price = $_SESSION['total_price'];
    echo "<h1>Thank you!</h1>";
    echo "<h3>Total price is $total_price VNĐ.</h3>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="submit" value="Homepage">
    </form>
</body>
</html>