<html>
    <head><title>Conditional Test</title></head>
    <body>
        <?php
        
        $first = $_GET['firstName'];
        $middle = $_GET['middleName'];
        $last = $_GET['lastName'];

        echo "Hi $first! Your full name is $last $middle $first. <br>";
        if($first == $last) echo "$first and $last are equal";
        elseif($first < $last) echo "$first is less than $last";
        else echo "$first is greater than $last";
        print "<br>";

        $grade1 = $_GET['grade1'];
        $grade2 = $_GET['grade2'];
        $final = (2*$grade1+3*$grade2)/5;
        if($final >4.0){
            echo "Your final grade is $final. You passed.";
            $rate = "Not F";
        }elseif($final > 0){
            echo "Your final grade is $final. You not pass.";
            $rate = "F";
        }else{
            echo "Illegal grade less than 0. Final grade = $final";
            $rate = "Illegal";
        }
        print("<br>");
        switch($rate){
            case "Not F": echo "Congratulation!"; break;
            case "F": echo "You have to try again!"; break;
            default: echo ("Illegal grade!");
        }

        ?>
    </body>
</html>