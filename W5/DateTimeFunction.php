<!DOCTYPE html>
<html>
    <head>
        <title>Date Time Validation</title>
    </head>
    <body>
        <p>Enter your name and select date and time for the appointment</p>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <?php
        if(array_key_exists("year1",$_POST)){
            $day1=$_POST["day1"];
            $month1=$_POST["month1"];
            $year1=$_POST["year1"];
            $hour1=$_POST["hour1"];
            $minute1=$_POST["minute1"];
            $second1=$_POST["second1"];
        }else{
            $day1=2;$month1=9;$year1=1969;
        }
        if(array_key_exists("year2",$_POST)){
            $day2=$_POST["day2"];
            $month2=$_POST["month2"];
            $year2=$_POST["year2"];
            $hour2=$_POST["hour2"];
            $minute2=$_POST["minute2"];
            $second2=$_POST["second2"];
        }else{
            $day2=2;$month2=9;$year2=1969;
        }
        
        ?>
        
            <div>
                <p>Person 1:</p>
                <input type="text" size="20" maxlength="30" name="name1" value="<?= @ $_POST['name1'] ?>">
            </div>
            <div>
                <p>Birthday 1:</p>
                <select name="day1" id="day1">
                    <?php
                    for($i=01;$i<=31;$i++){
                        if($day1==$i)
                        echo "<option selected value=".$i.">".$i."</option>";
                        else echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
                <select name="month1" id="month1">
                    <?php
                    for($i=01;$i<=12;$i++){
                        if($month1==$i)
                        echo "<option selected value=".$i.">".$i."</option>";
                        else echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
                <select name="year1" id="year1">
                    <?php
                    for($i=1960;$i<=2050;$i++){
                        if($year1==$i)
                        echo "<option selected value=".$i.">".$i."</option>";
                        else echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <p>Person 2:</p>
                <input type="text" size="20" maxlength="30" name="name2" value="<?= @ $_POST['name2'] ?>">
            </div>
            <div>
                <p>Birthday 2:</p>
                <select name="day2" id="day2">
                    <?php
                    for($i=01;$i<=31;$i++){
                        if($day2==$i)
                        echo "<option selected value=".$i.">".$i."</option>";
                        else echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
                <select name="month2" id="month2">
                    <?php
                    for($i=01;$i<=12;$i++){
                        if($month2==$i)
                        echo "<option selected value=".$i.">".$i."</option>";
                        else echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                </select>
                <select name="year2" id="year2">
                    <?php
                    for($i=1960;$i<=2050;$i++){
                        if($year2==$i)
                        echo "<option selected value=".$i.">".$i."</option>";
                        else echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
            </div>
            <br>
            <div>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
           
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name1 = $_POST["name1"];
                $day1 = $_POST["day1"];
                $month1 = $_POST["month1"];
                $year1 = $_POST["year1"];
                $name2 = $_POST["name2"];
                $day2 = $_POST["day2"];
                $month2 = $_POST["month2"];
                $year2 = $_POST["year2"];

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

