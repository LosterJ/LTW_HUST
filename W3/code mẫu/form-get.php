<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form example</title>
</head>
<body>
    
    <?php

    $errors = [];

    if (isset($_GET['sent'])) {
        // Validate user inputs
        if (!isset($_GET['username']) || $_GET['username'] == '')
            $errors[] = 'Invalid username';
        if (!isset($_GET['password']) || $_GET['password'] == '')
            $errors[] = 'Invalid password';


        if (count($errors) == 0) {
            echo '<p>Username: ' . $_GET['username'] . '</p>';

            echo '<p>Password: ' . $_GET['password'] . '</p>';
        } else {
            echo '<ul>';
            foreach ($errors as $e) {
                echo "<li>$e</li>";
            }
            echo '</ul>';
        }
    }

    if (!isset($_GET['sent']) || count($errors) > 0) {

    ?>


        <form action="" method="GET">
            <input type="hidden" name="sent" value="1" />

            <p>Username:</p>
            <input type="text" name="username" value="<?= @ $_GET['username'] ?>" />

            <p>Password:</p>
            <input type="password" name="password" value="<?= @ $_GET['password'] ?>" />

            <p>
                <button type="submit">Gửi</button>
            </p>
        </form>
    
    <?php

    }

    ?>

</body>
</html>