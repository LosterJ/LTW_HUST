<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$db = new mysqli;

$db->connect('localhost', 'root', '141214', 'business_service');

?>