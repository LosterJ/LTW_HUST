<html>
    <head><title>Coin Flip!</title></head>
    <body>
        <font size=4 color="blue">Please Pick Heads or Tails!</font>
        <form action="GotFlip.php" method="POST">
        <?php
        echo "<label><input type=\"radio\" name=\"pick\" value=0> Heads</label>";
        echo "<label><input type=\"radio\" name=\"pick\" value=1> Tails</label>";
        echo "<br>";
        ?>
        <input type="submit" value="Submit">
        <input type="reset" value="Restart">
        </form>
    </body>
</html>