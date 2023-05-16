<?php
include('database.php');

$name = $_REQUEST['name'];
$Category_type = $_REQUEST['Category_type'];

$sql = "INSERT INTO categories (name,type)
VALUES ('$name','$Category_type')";



if ($connection->query($sql) === TRUE) {
  header('Location: categories.php');
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}
exit;
$connection->close();
?>