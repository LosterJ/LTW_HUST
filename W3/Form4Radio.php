<html>
    <head><title>Reciving Input</title></head>
    <body>
        <font size="5">Thank you: Got Your Inputs</font>
        <?php
            $email = $_POST["email"];
            $contact = $_POST["contact"];
            print("<br>Your email address is $email");
            print("<br>Contact preference is $contact");
        ?>
    </body>
</html>