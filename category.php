

 <?php
$category1 = $_POST['Category1'];
$category2=$_POST['Category2'];
$category3=$_POST['Category3'];
$rank_of_judgement=$_POST['rank_of_judgement'];
include('database.php');

$sql = "SELECT * FROM judgements WHERE category1 = '$category1' and category2 = '$category2' and category3 ='$category3' and rank_of_judgement='$rank_of_judgement'";
$result = $connection->query($sql);
?>
<table><tbody><tr>
<th>Filters for Results</th>
<th>View</th>

</tr>
    <?php 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?><tr>
        <td><?php echo $row["id"]; ?> ,<?php echo $row["appellant_name"]; ?>,<?php echo $row["created_date"]; ?></td>
        
        <td><a href="view.php?id=<?php echo $row['id']; ?>">View</a></td>
    </tr>
    <?php }}
?>
</tbody></table> 
