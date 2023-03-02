<?php
    session_start();
    $games = $_SESSION["games"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shopping Cart Application</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h2>List of book</h2>
    <h3>Sorry, you can only buy <strong>ONE</strong> product.</h3>
    <form action="cart.php" method="POST">
        <table>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Price(VNĐ)</th>
                <th>Add to Cart</th>
            </tr>
            <?php
                for ($i = 0; $i < count($games); $i++) {
                    echo "<tr>";
                    echo "<td>", $games[$i]["name"], "</td>";
                    echo "<td>", $games[$i]["tags"], "</td>";
                    echo "<td>", $games[$i]["price"], "</td>";
                    if ($games[$i]['in-cart']) {
                        echo "<td><input type=\"checkbox\" name=\"put_in_cart[]\" value=\"$i\" 
                            checked=\"checked\" disabled=\"disabled\"></td>";
                    } else {
                        echo "<td><input type=\"checkbox\" name=\"put_in_cart[]\" value=\"$i\"></td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
        <br>
        <input type="submit" name="store_submit" value="Add all your checked product to your cart">
    </form>
</body>
</html>