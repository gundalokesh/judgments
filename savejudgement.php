<?php
include('database.php');

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
$description = addslashes($_REQUEST['content']);
$file_name = '';
if(isset($_FILES['image'])) {
  $errors= array();
  $file_name = $_FILES['image']['name'];
  $file_size =$_FILES['image']['size'];
  $file_tmp =$_FILES['image']['tmp_name'];
  $file_type=$_FILES['image']['type'];
  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
  
  if(empty($errors)==true){
     move_uploaded_file($file_tmp,"images/".$file_name);
     echo "Success";
  }else{
     print_r($errors);
  }
}
$sql = "INSERT INTO judgements (judgement_number, citations, name_of_court ,name_of_judges, number_of_judges, nature_of_case,appellant_name,respondent_name,rank_of_judgement,category1,category2,category3,description,upload)
VALUES ('$judgement_number', '$citations', '$name_of_court','$name_of_judges','$number_of_judges','$nature_of_case','$appellant_name','$respondent_name','$rank_of_judgement','$category1','$category2','$category3','$description','$file_name')";

if ($connection->query($sql) === TRUE) {
  header('Location: judgements.php');
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}
exit;
$connection->close();
?>