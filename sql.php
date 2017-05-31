<?php
$host="127.0.0.1";
$db ="iii";
$user="root";
$password="root";
$driver="mysql";
$charset="utf8";

$dsn="{$driver}:host={$host};{charset}={$charset};dbname={$db}";
$opt=[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH];