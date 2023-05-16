<?php


include('database.php');

$sql = "SELECT * FROM judgements";
$result = $connection->query($sql);?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Judgements</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- <link href = "//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> -->
<!-- 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" /> -->
  
<!-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script> -->
<!-- <script src="../assets/js/color-modes.js"></script> -->

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <style>

* {
  margin: 0;
  padding: 0;
  
}



      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }






     



.form-control{
 
    
}

.form-fields{
    display: flex;
    justify-content:space-evenly;
    margin-top: 30px;
   
}
.field{
    display: flex;
    flex-direction: column;
   
}
.btn{
margin-left: 50%;



}
#btn{
  margin-left: 0px;
}

table{
   margin: 0 auto;

}
th{
   
    border: 1px solid gray;

}
.txtarea{
    margin-left: 20%;
    width: 800px;
   
}
th{
  border :1px solid black !important;
}


.dataTables_length,.dataTables_filter {
    margin-bottom: 20px;
}
table.dataTable.no-footer {
    border: 1px solid rgba(0, 0, 0, 0.3);
}
tr.odd,tr.even{
  
  outline:1px solid black ;
  

}
tr.odd{
  background-color: #EAEAEA !important;
}

tr.even{
  background-color: #F9F9F9 !important;
}
tfoot input{
  width: 100px;
}


    </style>
  
    
    <!-- Custom styles for this template -->
    <!-- <link href="navbar-static.css" rel="stylesheet"> -->
  </head>
  <body>
   

    

    
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container">
    <!-- <a class="navbar-brand" href="#">Top navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
 
       
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






















    </div>
  </div>
</nav>










<main class="container-fluid">


  <div class="bg-body-tertiary px-auto ">
  <div class=" ">
  <button id="btn" class="btn btn-success mb-4"><a href="addjudgement.php" class="text-decoration-none dark text-dark">Add judgement</a></button>
</div>
   <div class="container-fluid overflow-x-scroll mx-0">
    <table class="table table-bordered border-dark mt-2" id="myTable">


    
      <thead class="mt-5">
        <tr>
          <th>Judgement Number</th>
          <th>Citations</th>
          <th>Name of Court</th>
          <th>Name of Judges</th>
          <th>Nature of Case</th>
          <th>Appellant Name</th>
          <th>Respondent Name</th>
          <th>Rank of Judgement</th>
          <th>Category</th>
          <th>Uploads</th>
          <th>Edit</th>
          <th>Add</th>
          
          
        </tr>
      </thead>
      <tbody>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>



<tr>
        <td><?php echo $row["judgement_number"]; ?></td>
        <td><?php echo $row["citations"]; ?></td>
        <td><?php echo $row["name_of_court"]; ?></td>
        <td><?php echo $row["name_of_judges"]; ?></td>
        <td><?php echo $row["nature_of_case"]; ?></td>
        <td><?php echo $row["appellant_name"]; ?></td>
        <td><?php echo $row["respondent_name"]; ?></td>
        <td><?php echo $row["rank_of_judgement"]; ?></td>
        <td>
            <ul>
            <li><?php echo $row["category1"];?></li>
           <li> <?php echo $row["category2"];?></li>
            <li><?php echo $row["category3"]; ?></li>
    </ul>
        </td>
      
        <td><a target="_blank" href="images/<?php echo $row["upload"]; ?>"><?php echo $row["upload"]; ?></a></td>
       
        <td><a href="edit.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a href="Add.php?Add=<?php echo $row['id']; ?>">Add</a></td>

    </tr>

<?php }
}

$connection->close();


?>





<tfoot class="mt-5">
        <tr>
          <th>Judgement Number</th>
          <th>Citations</th>
          <th>Name of Court</th>
          <th>Name of Judges</th>
          <th>Nature of Case</th>
          <th>Appellant Name</th>
          <th>Respondent Name</th>
          <th>Rank of Judgement</th>
          <th>Category</th>
          <th>upload</th>
         
          <th>Edit</th>
          <th>Add</th>
          
          
        </tr>
      </tfoot>



</tbody>
</table>
</div>
  </div>
  

 
</main>

<!-- <script>
 let table = new DataTable('#myTable');
  </script> -->
  <script>
    $(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#myTable tfoot th').each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    });
 
    DataTable
    var table = $('#myTable').DataTable({
        initComplete: function () {
            // Apply the search
            this.api()
                .columns()
                .every(function () {
                    var that = this;
 
                    $('input', this.footer()).on('keyup change clear', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
        },
    });
});


    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
   
      
  </body>
</html>
