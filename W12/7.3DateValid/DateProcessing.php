<html>
    <head><title>Date Check</title></head>
    <body>
        <?php
        
        $date = $_POST['date'];
        $month='0[1-9]|1[0-2]';
        $day='0[1-9]|1[0-9]|3[0-1]';
        $year="[0-9]{4}";
        if(preg_match("/^($month)\/($day)\/$year$/",$date)){
            echo "Valid date=$date <br>";
        }else{
            echo "Invalid date=$date";
        }
        if(preg_match("/^(((0[13578]|1[02])\/(0[1-9]|[12]\d|3[01])\/((19|[2-9]\d)\d{2}))|((0[13456789]|1[012])\/(0[1-9]|[12]\d|30)\/((19|[2-9]\d)\d{2}))|(02\/(0[1-9]|1\d|2[0-8])\/((19|[2-9]\d)\d{2}))|(02\/29\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/",$date)){
            echo "Valid date=$date <br>";
        }else{
            echo "Invalid date=$date";
        }
        ?>
    </body>
</html>