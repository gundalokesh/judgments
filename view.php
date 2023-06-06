<?php


include('database.php');
$id = $_GET['id'];
$sql = "SELECT * FROM judgements WHERE id = $id";
$result = $connection->query($sql);

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</head>
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
            <!-- <li><a class="dropdown-item" href="judgements.php">List of Judgement</a></li> -->
            <li><a class="dropdown-item" href="searchjudgments.php">search judgement</a></li>
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



<!DOCTYPE html>
<html>
<head>
    <style>
        .sheet{
            margin-left: 50%;
   margin-top: 20px;
   transform:translate(-50%,0%);
        }
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    
    }
th {
    text-align: left;
}
.a{
    text-decoration:none;
    color:white;
}
#button{
    margin-left:70%;
    margin-bottom:0%;
}
    </style>
</head>
<body>
<button id=button class="btn btn-success mb-4"><a  class=a href="edit.php?edit=<?php echo $row['id']; ?>">Edit</a></button>
    <table class="sheet table table-striped" style="width:50%">
        <tr>
            <th>Judgement Number:</th>
            <td><?php echo $row['id']; ?></td>
            
        </tr>
        <tr>
            <th>Citations: </th>
            <td><?php echo $row['citations']; ?></td>
           
        </tr>
        <tr>
            <th>Name of Court: </th>
            <td><?php echo $row['name_of_court']; ?>
               </td>
            
        </tr>
        <tr>
            <th>Name of Judges: </th>
            <td><?php echo $row['name_of_judges']; ?></td>
            
        </tr>
        <tr>
            <th>Number of Judges:  </th>
            <td><?php echo $row['number_of_judges']; ?></td>
            
        </tr>
        <tr>
            <th>Judgement Date: </th>
            <td><?php echo $row['judgement_date']; ?></td>
            
        </tr>
        <tr>
            <th>Appellant Name:   </th>
            <td><?php echo $row['appellant_name']; ?></td>
            
        </tr>
        <tr>
            <th>Respondent Name:   </th>
            <td><?php echo $row['respondent_name']; ?></td>
            
        </tr>
        <tr>
            <th>Judgement:  </th>
            <td><?php echo $row['description']; ?></td>
            
        </tr>
        <tr>
            <th>Upload Files:  </th>
            <td>
                <?php $images = json_decode($row["upload"]); ?>
                <ul>
                <?php foreach ($images as $img) { ?>
                <li>
                    <a target="_blank" href="images/<?php echo $img; ?>"><?php echo $img; ?></a>
                </li>
                <?php } ?>
                </ul>    
            </td>
            
        </tr>
        <tr>
            <th>Category 1:   </th>
            <td><?php echo $row['category1']; ?></td>
            
        </tr>
        <tr>
            <th>Category 2:   </th>
            <td><?php echo $row['category2']; ?></td>
            
        </tr>
        <tr>
            <th>Category 3:   </th>
            <td><?php echo $row['category3']; ?></td>
            
        </tr>
        <tr>
            <th>Rank of Judgement:    </th>
            <td><?php echo $row['rank_of_judgement']; ?></td>
            
        </tr>
        

    </table>
</body>
</html>
</body>
</html>