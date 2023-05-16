<?php

include('database.php');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($connection, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($connection,$id);
    
    
} 
function edit_data($connection, $id)
{
$sql= "SELECT * FROM judgements WHERE id= $id";
 $exec = mysqli_query($connection,$sql);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($connection, $id){

    $judgement_number= legal_input($_POST['judgement_number']);
    $citations= legal_input($_POST['citations']);
    $name_of_court = legal_input($_POST['name_of_court']);
    $name_of_judges = legal_input($_POST['name_of_judges']);
    $number_of_judges  = legal_input($_POST['number_of_judges']);
    $nature_of_case = legal_input($_POST['nature_of_case']);
    $appellant_name = legal_input($_POST['appellant_name']);
    $respondent_name  = legal_input($_POST['respondent_name']);
    $rank_of_judgement= legal_input($_POST['rank_of_judgement']);
    $category1= legal_input($_POST['category1']);
    $category2 = legal_input($_POST['category2']);
    $category3 = legal_input($_POST['category3']);
    $description = legal_input($_POST['content']);

    $upload  = legal_input($_POST['upload']);


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
            description = '$content',
            upload='$upload',
            
             WHERE id=$id";

      $exec= mysqli_query($connection,$query);
  
      if($exec){
         header('location:judgements.php');
      
      }else{
         $msg= "Error: " .$sql . "<br>" . mysqli_error($connection);
         echo $msg;  
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>