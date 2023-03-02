<?php

mysqli_report(MYSQLI_REPORT_OFF);

$conn = @ mysqli_connect('localhost','root','141214');

if(mysqli_connect_errno()){
    echo "Connection to DB failed with error: ".mysqli_connect_error();
    exit(0);
}
echo "Connected to DB.";
$query = 'show databases';
$result = mysqli_query($conn,$query);
var_dump($result->fetch_all());

$query = 'create table Book('.
    'id int primary key auto_increment,'.
    'title varchar(255) not null,'.
    'author varchar(255) not null,'.
    'publisher varchar(255)'.
    'yob int)';
mysqli_query($conn,$query);


?>

<?php

mysqli_report(MYSQLI_REPORT_OFF);

$conn = new mysqli;

$conn->connect('localhost','username','password','CSDLname');

if($conn->connect_errno){
    echo "Connection to DB failed with error: ".conn->connect_error;
    exit(0);
}
echo "Connected to DB.";

$query = 'create table Book('.
    'id int primary key auto_increment,'.
    'title varchar(255) not null,'.
    'author varchar(255) not null,'.
    'publisher varchar(255)'.
    'yob int)';
conn->query($query);


?>