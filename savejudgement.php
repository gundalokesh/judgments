<?php
include('database.php');

// $judgement_number = $_REQUEST['judgement_number'];
$citations = $_REQUEST['citations'];
$name_of_court = $_REQUEST['name_of_court'];
$name_of_judges = $_REQUEST['name_of_judges'];
$name_of_judges = $_REQUEST['name_of_judges'];

$number_of_judges =$_REQUEST['number_of_judges'];
$judgement_date =$_REQUEST['judgement_date'];
$nature_of_case =$_REQUEST['nature_of_case'];

$appellant_name = $_REQUEST['appellant_name'];
$respondent_name =$_REQUEST['respondent_name'];
$rank_of_judgement =$_REQUEST['rank_of_judgement'];
$category1 = $_REQUEST['category1'];
$category2 = $_REQUEST['category2'];
$category3 = $_REQUEST['category3'];
$description = addslashes($_REQUEST['content']);
$file_names = [];

// Count # of uploaded files in array
$total = count($_FILES['upload']['name']);

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != "") {
    //Setup our new file path
    $newFilePath = "images/" . $_FILES['upload']['name'][$i];
    $file_names[] = $_FILES['upload']['name'][$i];
    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here

    }
  }
}
$file_name = json_encode($file_names);
$sql = "INSERT INTO judgements (citations, name_of_court ,name_of_judges, number_of_judges,judgement_date, nature_of_case,appellant_name,respondent_name,rank_of_judgement,category1,category2,category3,description,upload)
VALUES ( '$citations', '$name_of_court','$name_of_judges','$number_of_judges','$judgement_date','$nature_of_case','$appellant_name','$respondent_name','$rank_of_judgement','$category1','$category2','$category3','$description','$file_name')";

if ($connection->query($sql) === TRUE) {
  $id = $connection->insert_id;
  StoreToFile($connection);
  
  header("Location:view.php?id=$id");
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}
exit;
$connection->close();

function StoreToFile($connection)
{
  $myfile = fopen("testfile.txt", "w");
  $sql = "SELECT * FROM judgements";
  $result = $connection->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $n = $row["id"];
      $u = $row["upload"];
      $txt = "$n $u\n";
      fwrite($myfile, $txt);
    }
  }
  fclose($myfile);
}
?>