<?php
$db = mysqli_connect('localhost', 'root','1234', 'appsalon');

if(!$db) {
    echo "Hubo unn error";
    exit;
}