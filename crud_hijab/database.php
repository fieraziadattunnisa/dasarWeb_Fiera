<?php

$serverName = "LAPTOP-CU11BD8J\SQLEXPRESS";
$connectionInfo = [
    "Database" => "crud_hijab"
];

$conn = sqlsrv_connect($serverName, $connectionInfo) or die(print_r(sqlsrv_errors(), true));