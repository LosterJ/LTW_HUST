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
    require_once('db_login.php');

    $query = 'create table categories(' .
        'category_id varchar(255) primary key,' .
        'title varchar(255) not null,' .
        'description varchar(255) not null)';
    //$query = 'drop table categories;';
    $db->query($query);

    print('<p>Created categories table.</p>');/**/

    $query = 'create table businesses(' .
        'business_id varchar(255) not null,' .
        'name varchar(255) not null,' .
        'address varchar(255) not null,' .
        'city varchar(255),' .
        'telephone varchar(255) not null,' .
        'url varchar(255) not null)';
    //$query = 'drop table businesses;';
    $db->query($query);

    print('<p>Created businesses table.</p>');

    $query = 'create table biz_categories(' .
    'business_id varchar(255) not null,' .
    'category_id varchar(255) not null)';
    //$query = 'drop table biz_categories;';
    $db->query($query);

    print('<p>Created biz_categories table.</p>');/**/


} catch (mysqli_sql_exception $e) {
    print('Error: ' . $e->getMessage());
}

    

?>

</body>
</html>