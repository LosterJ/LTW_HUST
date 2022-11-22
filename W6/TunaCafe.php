<html>
    <head><title>Tuna Cafe</title></head>
    <body>
        <font size=4 color="blue">Welcome to the Tuna Cafe Survey!</font>
        <form action="TunaResults.php" method="GET">
            <?php
            $menu = ['Tuna Casserole','Tuna Sandwich','Tuna Pie','Grilled Tuna','Tuna Surprise'];
            $bestseller = 2;
            echo "Please indicate all your favorite dishes.<br>";
            for($i=0;$i<count($menu);$i++){
                echo '<input type="checkbox" name="prefer[]" value='.$i.">".$menu[$i]."</input>";
                if($i == $bestseller){
                echo "<font color=red> Our Best Selleer!!!!</font>";
                }
                echo "<br>";
            }
            
            ?>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset>
        </form>
    </body>
</html>