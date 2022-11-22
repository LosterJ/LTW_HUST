<html>
    <head><title>Distance and Time Calculations</title></head>
    <body>
        <?php
        $cities=['Dallas'=>803,'Toronto'=>435,'Boston'=>848,'Nashville'=>406,'Las Vegas'=>1526,'San Francisco'=>1835,'Washington, DC'=>595,'Miami'=>1189,'Pittsburgh'=>409];
        echo "From Chicago to:";
            echo "
            <table border=1>
            <tr>
            <th>No <th>Destination <th>Distance <th>Driving time <th>Walking time
            </tr>";
        $destinations = $_GET["destinations"];
        $i=1;
        foreach ($destinations as $des){
            $distance=$cities[$des];
            $time=round(($distance/60),2);
            $walktime = round(($distance/5),2);
                echo "<tr>
                <td>$i</td>
                <td>$des</td>
                <td>$distance</td>
                <td>$time</td>
                <td>$walktime</td>
                </tr>";
                $i++;
        }
        echo "</table>";
        ?>
    </body>
</html>