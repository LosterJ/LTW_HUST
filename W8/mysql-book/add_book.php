<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    

<?php


    if (isset($_POST['sent'])) {
        $errors = [];

        if (!isset($_POST['title']) || $_POST['title'] == null) $errors[] = 'Title not specified';
        if (!isset($_POST['author']) || $_POST['author'] == null) $errors[] = 'Title not specified';

        if (count($errors) > 0) {
            print('<p>Errors</p>' .
                implode(array_map(fn($e) => "<p>- $e</p>", $errors)));
        } else {

            try {
                require_once('db.inc.php');

                $query = 'insert into book set ' .
                    'title = "' . addslashes($_POST['title']) . '"' .
                    ',author = "' . addslashes($_POST['author']) . '"' .
                    (isset($_POST['publisher']) ? ',publisher = "' . addslashes($_POST['publisher']) . '"' : '') .
                    (isset($_POST['yop']) ? ',yop = ' . $_POST['yop'] : '');
                $conn->query($query);

                print('<p>Book was added successfully.</p>');

            } catch (mysqli_sql_exception $e) {
                print('Error: ' . $e->getMessage());
            }
        }
    }
    

?>

    <form action="" method="post">
        <input type="hidden" name="sent" value="1">

        <p>Title:</p>
        <p><input type="text" name="title" value="<?= @ $_POST['title'] ?>"></p>

        <p>Author:</p>
        <p><input type="text" name="author" value="<?= @ $_POST['author'] ?>"></p>

        <p>Publisher:</p>
        <p><input type="text" name="publisher" value="<?= @ $_POST['publisher'] ?>"></p>

        <p>Year of publication:</p>
        <p><input type="number" name="yop" value="<?= @ $_POST['yop'] ?>"></p>

        <button type="submit">Submit</button>
    </form>


</body>
</html>