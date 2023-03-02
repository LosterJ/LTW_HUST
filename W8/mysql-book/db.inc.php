<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = new mysqli;

$conn->connect('localhost', 'root', '141214', 'sakila');

?>