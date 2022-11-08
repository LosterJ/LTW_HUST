
<html>
    <head>
        <title>Hello</title>
    </head>

    <body>
        <h1 style="text-align:center">This is a personal webpage</h1>
        <hr width="500px">
        <div>
            <center>
                <table border="1" >
                    <tr>
                        <td>
                            <p><strong>HaNoi University of Science and Technology</strong></p>
                            <p>Bui Anh Luong<br>HEDSPI
                            <br>Tam Diep, Ninh Binh</p>
                        </td>
                        <td><center><img src="IMG_0531.JPG" alt="My portrait picture" height="200"></center></td>
                    </tr>
                </table>
            </center>
        </div>
        <hr width="1000px">
        <div>
                <h2>My list of music on YT:</h2>
                <ul>
                    <li><a href="https://www.youtube.com/watch?v=7owsoGMjr_8">GHEP MOI - OSAD | RUNG DONG EP (Offical M/V)</a></li>
                    <li><a href="https://www.youtube.com/watch?v=KdrbBJNFwGw">Den - Anh Dech Can Gi Nhieu Ngoai Em ft. Vu., Thanh Dong (M/V)</a></li>
                </ul>
        </div>
        <?php
            echo 'A'; // hợp lệ
            echo 'A','B','C'; // hợp lệ
            echo ('A'),('B'),('C'); // hợp lệ
            print 'A'; //hợp lệ
            print ('A'); // hợp lệ
        ?>

        <?php
            if (isset($domain)){
                echo 'Biến domain đã tồn tại';
            }
            else{
                echo 'Biến domain chưa tồn tại';
            }
        ?>
        
    </body>
</html>