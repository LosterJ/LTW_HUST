<html>
    <head><title>Reciving Input</title></head>
    <body>
        <?php
            echo '<p>Hello, ' . $_GET['name'] . '</p>';
            echo '<p>You are studying at ' . $_GET['class'] . ', ' . $_GET['university'] . '</p>';
            echo '<p>Your gender is ' . $_GET['gender'] . '</p>'

        ?>
    </body>
</html>