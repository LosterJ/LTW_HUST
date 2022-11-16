<html>
    <head><title>Convert Radians to Degrees and Vice Versa</title></head>
    <body>
        
        <font size=5 color="blue">Convert Radians to Degrees and Vice Versa</font>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
            <input type="hidden" name="sent" value="1">
        <table>
            <tr>
                <td>Choose feature:</td>
                <td><label><input type="radio" name="feature" value="1" <?= @ $_GET['feature'] == '1' ? 'checked' : '' ?>>Radian to Degree</label></td>
            <tr>
                <td></td>
                <td><label><input type="radio" name="feature" value="0" <?= @ $_GET['feature'] == '0' ? 'checked' : '' ?>>Degree to Radian</label></td>
            </tr>
                
            <br>
            <input type="text" name="num_value" value="<?=@ $_GET["num_value"]?>">
            <br><br><br>
            <input type="submit" value="Submit">
        </table>
        <br><br>

        <?php
            if(!isset($_GET["num_value"])||$_GET["num_value"]==''){
               $value=0;$feature=0;
            } else {
                $value=$_GET["num_value"];
                $feature=$_GET["feature"];
                if($feature==0){
                    $show_value=round(deg2rad($value),3);
                    echo $value." degrees is ".$show_value." radians.";
                }else{
                        $show_value=round(rad2deg($value),3);
                        echo $value." radians is ".$show_value." degrees.";
                }
            }
            ?>

        </form>

    </body>
</html>