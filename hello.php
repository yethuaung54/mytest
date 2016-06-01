<?php

$host = "myadmin.localhost";
$db = "test";
$username = 'root';
$password = "root";
// $charset = "utf8";
// $collation = "utf8mb4_unicode_ci";
$options = array(
    // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
  );
$conn = new PDO(
  "mysql:host=$host;dbname=$db", 
  $username, 
  $password, 
 $options
);

getIcon($conn);

function getIcon($conn) {
    $sql = 'SELECT * FROM icons';
    foreach ($conn->query($sql) as $row) {
        print $row['name'] . "\t";
    }
}

// if( version_compare(PHP_VERSION, '5.3.6', '<') ){
//     if( defined('PDO::MYSQL_ATTR_INIT_COMMAND') ){
//         $options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES ' . DB_ENCODING;
//     }
// }else{
//     $dsn .= ';charset=' . DB_ENCODING;
// }

// $conn = @new PDO($dsn, DB_USER, DB_PASSWORD, $options);

// if( version_compare(PHP_VERSION, '5.3.6', '<') && !defined('PDO::MYSQL_ATTR_INIT_COMMAND') ){
//     $sql = 'SET NAMES ' . DB_ENCODING;
//     $conn->exec($sql);
// }