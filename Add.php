<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>



    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
   
    
    <script src="ckeditor.js"></script>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-static/"> -->

<!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>

* {
  margin: 0;
  padding: 0;
  /* box-sizing: border-box; */
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
#submit{
margin-left: 50%;



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


  
body{
    /* background: #E3F2FD; */
}


        </style>
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
        <button class="btn btn-outline-success " class="search" name="filter_btn" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 
  

<p style="color:red"><?php if(!empty($msg)){echo $msg; }?></p>

    <form action="savejudgement.php" method="POST" enctype="multipart/form-data">
      <div class="form-fields">
        <div class="field">
          <label>Judgement Number</label>
          <input type="text" id="JudgementNumber" name="judgement_number"/>
        </div>
        <div class="field">
          <label>Citations</label>
          <input type="text" id="Citations" name='citations'/>
        </div>

        <div class="field">
          <label>Name of Court</label>
          <input type="text" id="NameofCourt" name='name_of_court' />
        </div>
      </div>
      <div class="form-fields">
        <div class="field">
          <label>Name of Judges</label>
          <input type="text" id="NameofJudges" name='name_of_judges'/>
        </div>

        <div class="field">
          <label>Number of Judges</label>
          <input type="text" id="NumberofJudges" name=' number_of_judges'/>
        </div>
        <div class="field">
          <label>Nature of Case</label>
          <input type="text" id="NatureofCase" name='nature_of_case'/>
        </div>
      </div>
      <div class="form-fields">
        <div class="field">
          <label>Appellant Name</label>
          <input type="text" id="AppellantName" name='appellant_name'/>
        </div>
        <div class="field">
          <label>Respondent Name</label>
          <input type="text" id="RespondentName" name='respondent_name'/>
        </div>
        <div class="field">
          <label>Rank of Judgement</label>
          <input type="text" id="RankofJudgement" name='rank_of_judgement'/>
        </div>
      </div>
      <div class="form-fields">
        <div class="field">
          <label>Category 1 :</label>
          <input type="text" id="Category1" name='category1'/>
        </div>
        <div class="field">
          <label>Category 2 :</label>
          <input type="text" id="Category2" name='category2'/>
        </div>
        <div class="field">
          <label>Category 3 :</label>
          <input type="text" id="Category3" name='category3' />
        </div>
      </div>
      <div class="txtarea mt-4">
        <p>Description : -</P>
      <textarea  name="content" id="editor" rows="10" cols="80"></textarea>
      </div>
      <div class="form-fields">
        <div class="field">
          <label for="formFile">Upload </label>
          <input type="file" id="formFile" id="Upload" name='image'/>
        </div>
        <div class="field">

      
<!-- <label for="formFile">Edit </label>
<input type="file" id="formFile" id="Upload" name='Edit'/> -->
</div>
        <!-- <div class="field">
          <label for="formFile">Default file input example</label>
          <input type="file" id="formFile" id="Default" name='citations'/>
        </div> -->
      </div>
     

      <button type="submit " id="submit" class="btn btn-primary mt-4 ">
        Submit
      </button>
      <script>
    // Replace the <textarea> with a CKEditor
    CKEDITOR.replace('content');
</script>
    </form>




   

    

 
  </body>
</html>
