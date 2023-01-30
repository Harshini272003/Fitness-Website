<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fittest</title>
   <link rel="shortcut icon" href="./images/favicon.png" type="image/svg+xml">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="css/index.css">
   <style>
    
   </style>
</head>

	
  <body>

    <div style="background-image:url(images/admin-bg.png);background-size: cover;">
<div >
  <div class="container">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    
      <a class="navbar-brand" href="home.html">Fittest</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
   
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item " href="course_admin_add.php">Add Course</a></li>
              <li><a class="dropdown-item " href="course_admin_delete.php">Delete Course</a></li>
              <li><a class="dropdown-item " href="course_admin_edit.php">Edit Course</a></li>
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false">Users</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item " href="user_add.php">Add User</a></li>
              <li><a class="dropdown-item" href="user_delete.php">Delete User</a></li>
              <li><a class="dropdown-item " href="user_edit.php">Edit User Details</a></li>
            </ul>
          </li>
             
             <li class="nav-item">
                <a class="nav-link text-white" href="home.html">Home</a>
             </li>
            <li class="nav-item">
                <a class="nav-link" href="out.php">Logout</a>
             </li>

        </ul>
       
      </div>
    </div>
  </nav>
  <div id="text" class="container" style="color:#fff; text-align: center; padding-top: 100px;">
  <h1>Admin Page</h1>
  <div style="height:300px">
  
  </div>
  <div class="row">
 <div class="col-lg-6" >
<a href="course_admin_add.php"  class="btn btn-lg btn-light">Add Course</a><br><br>
   <a href="course_admin_delete.php"  class="btn btn-lg btn-light">Delete Course</a><br><br>
    <a href="course_admin_edit.php"  class="btn btn-lg btn-light">Edit Course</a><br><br><br>
 </div>
  <div class="col-lg-6" >
     <a href="user_add.php"  class="btn btn-lg  btn-light">Add User</a><br><br>
      <a href="user_delete.php"  class="btn btn-lg  btn-light">Delete User</a><br><br>
       <a href="user_edit.php"  class="btn btn-lg  btn-light">Edit User</a><br><br>
     </div>
   </div>
</div>
  <div style="height:400px;"></div>
	</div>
  </div>
</body>
</html>