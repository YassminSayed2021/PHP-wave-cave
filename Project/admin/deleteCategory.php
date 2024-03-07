<?php

include "../conn.php";

$id=$_GET['id'];

$sql="DELETE FROM categories WHERE cat_id=$id";
$conn->exec($sql);
//echo"Record Deleted successfully";
header("Refresh:2;URL=categories.php");

?>
