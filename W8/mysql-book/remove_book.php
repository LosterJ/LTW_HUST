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


    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        try {
            require_once('db.inc.php');

            $query = 'delete from book where id = ' . $_GET['id'];
            $conn->query($query);

            print('<p>Book was removed successfully.</p>');

        } catch (mysqli_sql_exception $e) {
            print('Error: ' . $e->getMessage());
        }
        
    } else {
        print ('<p>Book ID not specified.</p>');
    }
    

?>


</body>
</html>