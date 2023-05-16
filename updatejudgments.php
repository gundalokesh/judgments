<?php
include('database.php');

$id = $_REQUEST['id'];
$judgement_number = $_REQUEST['judgement_number'];
$citations = $_REQUEST['citations'];
$name_of_court = $_REQUEST['name_of_court'];
$name_of_judges = $_REQUEST['name_of_judges'];

$number_of_judges =$_REQUEST['number_of_judges'];
$nature_of_case =$_REQUEST['nature_of_case'];


$appellant_name = $_REQUEST['appellant_name'];
$respondent_name =$_REQUEST['respondent_name'];
$rank_of_judgement =$_REQUEST['rank_of_judgement'];
$category1 = $_REQUEST['category1'];
$category2 = $_REQUEST['category2'];
$category3 = $_REQUEST['category3'];
$description =  addslashes($_REQUEST['content']);


$sql="UPDATE judgements 
SET judgement_number='$judgement_number',
citations='$citations',
name_of_court= '$name_of_court',
name_of_judges='$name_of_judges',
number_of_judges='$number_of_judges',
nature_of_case= '$nature_of_case',
appellant_name='$appellant_name',
respondent_name='$respondent_name',
rank_of_judgement= '$rank_of_judgement',
category1='$category1',
category2='$category2',
category3='$category3',
description= '$description'
 WHERE id=$id";

if ($connection->query($sql) === TRUE) {
  header('Location: judgements.php');
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}
exit;
$connection->close();
?>