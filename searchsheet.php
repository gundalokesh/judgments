
<?php
include('database.php');

$sql = "SELECT * FROM categories";
$result = $connection->query($sql);
$categories = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $categories[$row['type']][] = $row['name'];
  }

}

?>

<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<style>
    #Category1,#Category2,#Category3{
        width: 185px;
    }
 .sheet,#btn{
   margin-left: 50%;
   transform:translate(-50%,0%);
   
 }
 .sheet1{
   margin-left: 50%;
   margin-top: 20px;
   transform:translate(-53%,0%);
   
 }
 #results{
  margin-left: 50%;
   margin-top: 20px;
   transform:translate(-50%,0%);
 }
   
table,
    th,
    td {
        width: 600px;
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
th {
    text-align: left;
}
   
 
    </style>

    <script>
        $(document).ready(function(){
            $("button").click(function(){
                var Category1=$("#Category1").val();
                var Category2=$("#Category2").val();
                var Category3=$("#Category3").val();
                $.post("category.php",
                {
                    Category1:Category1,
                    Category2:Category2,
                    Category3:Category3,

                },function(result) {console.log(result);
    $("#results").html(result);
})

            })
        })
        </script>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Top navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li> -->
       
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Judgment
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addjudgement.php">Add Judgment</a></li>
            <li><a class="dropdown-item" href="judgements.php">List of Judgement</a></li>
            
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addcategories.php">Add categories
</a></li>
            <li><a class="dropdown-item" href="categories.php">List categories
</a></li>
           
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" name="filter_value" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" name="filter_btn" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

	<div class=sheet>
		<table >
        <tbody style="border:1px solid red;">
				<tr class=tr>
					<th>General Search in any of the fields</th>
					<td><input type="text" name="fname" id="General"></td>
				</tr>
			
			
				<tr>
					<th>Category1</th>
					<td>
                        
                        
       
  <div class="field">
          <select id="Category1" name='category1'>
          <option>Select</option>
        <?php
        
        foreach($categories['type1'] as $name) {?>
        
          <option><?php echo $name; ?></option>
        <?php }
        ?>
        </select>
        </div>
                </td>

				</tr>
				<tr>
					<th>Category2</th>
					<td>
                    <div class="field">
          <select id="Category2" name='category2'>
          <option>Select</option>
        <?php
        foreach($categories['type2'] as $name) {?>
       
          <option><?php echo $name; ?></option>
        <?php }
        ?>
        </select>
        </div>
                    </td>
				</tr>
				<tr>
					<th>Category3</th>
					<td>
                    <div class="field">
                        
          <select id="Category3" name='category3'>
          <option>Select</option>
        <?php
        foreach($categories['type3'] as $name) {?>
           
          <option><?php echo $name; ?></option>
        <?php }
        ?>
        </select>
        </div>
                    </td>
				</tr>
                <tr>
					<th>Rank  of judgments</th>
					<td><input type="text" name="age" id="Rank"></td>
				</tr>
			
			</tbody>
            
		</table>
        <button type="submit " id="btn" class="btn btn-primary mt-4" name="button" id="btn" value="Add" >
        Submit
      </button>

</div>
<div id="results">

</div>


		
		
</body>
</html>
