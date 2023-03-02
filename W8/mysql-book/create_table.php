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

try {
    require_once('db.inc.php');

    $query = 'create table Book(' .
        'id int primary key auto_increment,' .
        'title varchar(255) not null,' .
        'author varchar(255) not null,' .
        'publisher varchar(255),' .
        'yop int)';
    $conn->query($query);

    print('<p>Created table.</p>');

} catch (mysqli_sql_exception $e) {
    print('Error: ' . $e->getMessage());
}

    

?>

</body>
</html>