<?php

include "../conn.php";

$id=$_GET['id'];

$sql="DELETE FROM users WHERE user_id=$id";
$conn->exec($sql);
//echo"Record Deleted successfully";
header("Refresh:2;URL=users.php");

?>
