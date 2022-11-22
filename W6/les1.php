<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $submitted = isset($_GET['sent'])&&$_GET['sent']==1;
    $dishes = ['Casserole','Sandwich','Pie','Grilled Tuna','Surpise'];
    if ($submitted){
        $preferences = $_GET['preferences'];
        if(count($preferences)==0) echo "<p>Please choose some dishes</p>";
        else{
            echo "<p>Your prefered dishes:</p>";
            echo "<ol>";
                foreach($preferences as $p) {
                    echo "<li>".$dishes[$p]."</li>";
                }
            echo "</ol>";
        }
    }
    ?>
    <form action="" method="GET">
        <input type="hidden" name="sent" value="1">
        <p>Your favorite dishes:</p>
        <?php
        foreach($dishes as $i => $d) {?>
            <p>
                <label><input type="checkbox" name="preferences[]" value="<?=$i?>"><?=$d?></label>
            </p>
        <?php
        }
        ?>
        <input type="submit" value="Submit">
    </form>
</body>
</html>