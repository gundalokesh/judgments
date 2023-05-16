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
<style>
.ff{
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
}


    </style>



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
<div class="form-fields">
    <div class="ff">
        <div class="field">
          <label>Name</label>
          <input type="text" id="JudgementNumber" name="name"/>
        </div>
        <button type="submit " class="btn btn-primary mt-4 ">
        Submit
      </button>
      </div>
</div>
</body>
</html>