<?php
$conn = mysqli_connect("mysql", "admin", "admin@123");
if ($conn == false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$selectdb = mysqli_select_db($conn, "DemoCorpEcom");
if (!$selectdb) {
    $sqlcreatedb = "CREATE DATABASE IF NOT EXISTS `DemoCorpEcom`";
    if (mysqli_query($conn, $sqlcreatedb)) {
        $selectdb = mysqli_select_db($conn, "DemoCorpEcom");
    }
}
if ($selectdb) {
    $sqlcreatetable = "CREATE TABLE IF NOT EXISTS `product` (
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `name` varchar(100) NOT NULL UNIQUE,
                        `description` varchar(100) NOT NULL,
                        `price` FLOAT NOT NULL,
                        PRIMARY KEY (`id`))";
    mysqli_query($conn, $sqlcreatetable);
}
?>