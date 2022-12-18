<?php
include("server.php");
session_start();
$userid = $_SESSION['userid'];
if (!isset($_SESSION['username'])) {
    header("location:index.php");
}
if (isset($_POST['logout'])) {
    session_destroy();
    header("location:index.php");
}
?>
<html>
<h1>Welcome to DemoCorpEcom</h1>
<form action="" method="post">
    <input type="submit" value="logout" name="logout" /></form>
</h1>

</html>