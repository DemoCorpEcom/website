<?php
session_start();
include("server.php");
$warning = "";
if (isset($_GET['loginButton'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    $sql = " SELECT * FROM `register` WHERE `username` = '$username' ";
    $qry = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($qry)) {
        $dbusername = $row['username'];
        $dbpassword = $row['password'];
        $id = $row['id'];

        if ($username == $dbusername && $password == $dbpassword) {
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $id;
            header("location: home.php");
            $warning = "";
        }
    }
    $warning = "Incorrect Password or username";
}
?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<h1>Login</h1>
<form method='GET'>
    <div class="row">
        <label for="username">Username</label>
        <input type="text" name="username" autocomplete="off" placeholder="username">
    </div>
    <div class="row">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="password">
    </div>
    <input type="submit" value="Login" name="loginButton" class="button"></input>
</form>

</html>