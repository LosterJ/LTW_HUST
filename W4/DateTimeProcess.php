<!DOCTYPE html>
<html>
    <head>
        <title>Date Time Validation</title>
    </head>
    <body>
        <p>Enter your name and select date and time for the appointment</p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <?php
        if(array_key_exists("second",$_POST)){
            $day=$_POST["day"];
            $month=$_POST["month"];
            $year=$_POST["year"];
            $hour=$_POST["hour"];
            $minute=$_POST["minute"];
            $second=$_POST["second"];
        }else{
            $day=2;$month=9;$year=1969;
            $hour=9;$minute=47;$second=00;
        }
        
        ?>
        
            <div>
                <p>Your name:</p>
                <input type="text" size="20" maxlength="30" name="name" value="<?= @ $_POST['name'] ?>">
            </div>
            <div>
                <p>Date:</p>
                <select name="day" id="day">
                    <?php
                    for($i=01;$i<=31;$i++){
                        if($day==$i)
                        echo "<option selected value=".$i.">".$i."</option>";
                        else echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
                <select name="month" id="month">
                    <?php
                    for($i=01;$i<=12;$i++){
                        if($month==$i)
                        echo "<option selected value=".$i.">".$i."</option>";
                        else echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
                <select name="year" id="year">
                    <?php
                    for($i=1960;$i<=2050;$i++){
                        if($year==$i)
                        echo "<option selected value=".$i.">".$i."</option>";
                        else echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <p>Time:</p>
                <select name="hour" id="hour">
                    <?php
                    for($i=0;$i<=23;$i++){
                        if($hour==$i)
                        echo "<option selected value=".$i.">".$i."</option>";
                        else echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
                <select name="minute" id="minute">
                    <?php
                    for($i=0;$i<=59;$i++){
                        if($minute==$i)
                        echo "<option selected value=".$i.">".$i."</option>";
                        else echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
                <select name="second" id="second">
                    <?php
                    for($i=0;$i<=59;$i++){
                        if($second==$i)
                        echo "<option selected value=".$i.">".$i."</option>";
                        else echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
            </div>
            <br>
            <div>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
           
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $day = $_POST["day"];
                $month = $_POST["month"];
                $year = $_POST["year"];
                $hour = $_POST["hour"];
                $minute = $_POST["minute"];
                $second = $_POST["second"];

                if ($hour > 12) $subhour = $hour - 12;
                else $subhour = $hour;
                if ($hour > 11) $sign = "PM";
                else $sign = "AM";

                switch ($month){
                    case "1":
                    case "3":
                    case "5":
                    case "7":
                    case "8":
                    case "10":
                    case "12":
                        $numberOfDays = 31;
                        break;
                    case "4":
                    case "6":
                    case "9":
                    case "11":
                        $numberOfDays = 30;
                        break;
                    case "2":
                        if ($year % 100 == 0) {
                            if ($year % 400 == 0) {
                                $numberOfDays = 29;
                            } else {
                                $numberOfDays = 28;
                                }
                        } else {
                            if ($year % 4 == 0) {
                                $numberOfDays = 29;
                            } else {
                                $numberOfDays = 28;
                            }
                        }
                }

            print "<br><br><br>Hi $name!<br><br>";
            print "You have choose to have an appointment on
                $hour:$minute:$second, $day/$month/$year<br><br>";
            print "More information:<br><br>";
            print "This month has $numberOfDays days!<br>";
            }
            if ($day > $numberOfDays){
                echo "The day that you chosen was not exit!<br>";
                print "In 12 hours, the time is
                $subhour:$minute:$second $sign<br>";
            }else{
                print "In 12 hours, the time and date is
                $subhour:$minute:$second $sign, $day/$month/$year<br>";
            }
        ?>
    </body>
</html>

