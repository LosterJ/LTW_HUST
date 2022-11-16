<html>
    <head><title>Date Time Function</title></head>
    <body>
        <font size=4 color="Blue">Date Time Function</font>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
    
            <div>
                <p>Person 1:</p>
                <table>
                    <tr>
                        
                        <td>Name:</td>
                        <td><input type="text" name="name1" value="<?=@ $_GET["name1"]?>"></td>
                    </tr>
                    <tr>
                        <td>Birthday:(mm/dd/yy)</td>
                        <td><input type="text" name="birthday1" value="<?=@ $_GET["birthday1"]?>"></td>
                    </tr>
                </table>
            </div>
            <br><br>
            <div>
                <p>Person 2:</p>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name2" value="<?=@ $_GET["name2"]?>"></td>
                    </tr>
                    <tr>
                        <td>Birthday:(mm/dd/yy)</td>
                        <td><input type="text" name="birthday2" value="<?=@ $_GET["birthday2"]?>"></td>
                    </tr>
                </table>
            </div>
            
            <br>
            <input type="submit" value="Submit">
        </form>
        <?php
        

        if(!isset($_GET["name1"])||$_GET["name1"]=='' || !isset($_GET["name2"])||$_GET["name2"]=='' || !isset($_GET["birthday1"])||$_GET["birthday1"]=='' || !isset($_GET["birthday2"])||$_GET["birthday2"]=='' ){
            echo "Fill in the blank!";
        } else{
            $birthday1=$_GET["birthday1"];
            $birthday2=$_GET["birthday2"];
            $ftbd1=strtotime($birthday1);
            $ftbd2=strtotime($birthday2);
            echo $ftbd1."<br>";
            echo $birthday1."<br>";
        }
        
        if($birthday1!="01/01/1970" && $ftbd1==strtotime("01/01/1970")){
                echo "This not valid date!";
        }elseif($birthday2!="01/01/1970" && $ftbd2==strtotime("01/01/1970")){
            echo "This not valid date!";
        }else{
            
            $name1=$_GET["name1"];
            $birthday1=$_GET["birthday1"];
            $name2=$_GET["name2"];
            $birthday2=$_GET["birthday2"];
            $ftbd1=strtotime($birthday1);
            $ftbd2=strtotime($birthday2);

            

            echo $name1."'s birthday is ".date('l, F d, Y',$ftbd1).".<br>";
            echo $name2."'s birthday is ".date('l, F d, Y',$ftbd2).".<br><br>";
            $abs_diff = abs($ftbd1 - $ftbd2);
            echo "The difference of two dates is ".round($abs_diff/(60*60*24))." day(s).<br><br>";

            $year=date("Y");
            $month=date("m");
            $day=date("d");
            $yearOld=$year-date("Y",$ftbd1);
            if($month<=date("m",$ftbd1)) $yearOld--;
            echo $name1." is ".$yearOld." year old.<br>";
            $yearOld=$year-date("Y",$ftbd2);
            if($month<=date("m",$ftbd2)) $yearOld--;
            echo $name2." is ".$yearOld." year old.<br><br>";

            $difYear=abs(date("Y",$ftbd1)-date("Y",$ftbd2));
            echo "The difference years between two persons is ".$difYear." year(s).";
        }
        ?>
    </body>
</html>