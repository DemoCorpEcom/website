<?php
include("server.php");
$id = $_GET['id'];
$sql = " SELECT * FROM `product` WHERE `id` = '$id' ";
$qry = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($qry)) {
    $name = $row['name'];
    $description = $row['description'];
    echo '<div>'.$name.'</div>';
    echo $description;
}
?>
<html>
</h1>

</html>