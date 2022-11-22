<html>
    <head><title>Tuna Cafe</title></head>
    <body>
        <font size=4 color="blue">Tuna Cafe Results Received</font>
        <?php
        $menu=['Tuna Casserole','Tuna Sandwich','Tuna Pie','Grilled Tuna','Tuna Surprise'];
        $prefer = $_GET["prefer"];
        if(count($prefer)==0){
            echo 'Oh no! Please pick something as your favorite!';
        }else{
            echo"<br>Your selections were <ul>";
            foreach($prefer as $item){
                echo "<li>$menu[$item]</li>";
            }
            echo "</ul>";
        }
        ?>
    </body>
</html>