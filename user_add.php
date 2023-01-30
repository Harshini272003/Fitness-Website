<?php
require_once('connect.php');
error_reporting(0);
?>

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
</head>


<body>
    <div style="background-image:url(images/admin-bg.png);background-size: cover;">
<div class="container">
 <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">

      <a class="navbar-brand" href="#">Fittest</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
   
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="course_admin_add.php">Add Course</a></li>
              <li><a class="dropdown-item" href="course_admin_delete.php">Delete Course</a></li>
              <li><a class="dropdown-item" href="course_admin_edit.php">Edit Course</a></li>
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Users</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="user_add.php">Add User</a></li>
              <li><a class="dropdown-item" href="user_delete.php">Delete User</a></li>
              <li><a class="dropdown-item" href="user_edit.php">Edit User</a></li>
            </ul>
          </li>

         <li class="nav-item">
                <a class="nav-link" href="out.php">Logout</a>
             </li>

        </ul>
       
      </div>
  
  </nav>

<main class="form-signin w-50 m-auto">
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post" >
    
    <h1 class="h3 mb-3 fw-normal text-white">Add a User</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
      <label for="name">Name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
      <label for="password">Password</label>
    </div>
  <select class="form-select" aria-label="Default select example" name="option" id="option" required>
  <option selected>user</option>
  <option >admin</option>
 
</select>



   
    <br>


    <button id="add" class="w-100 btn btn-md btn-primary" type="submit">Add User</button>
 </form><br>
</main>
</div>

	<?php
if (!empty($_POST['name']))
{

  require_once('connect.php');
  //error_reporting(0);

  $name = $_POST['name'];
  
  $email = $_POST['email'];
  $password = $_POST['password'];
  $ut = $_POST['option'];
    //echo $cname.$language.$location.$date;

 
  

  $query = mysqli_query($con, "SELECT * FROM user WHERE email='$email'");
  $n = mysqli_num_rows($query); 
  $ro=mysqli_fetch_assoc($query);

if($n>0)
  {
      $message = "Email aldready exists";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location.href='user_add.php';</script>";
  }

  else
  {
    $insert = "insert into user values('','$name','$email','$password','$ut')";
    mysqli_query($con,$insert);
     $message = "User added Successful";
     echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.location.href='user_add.php';</script>";

 }
 
}
?>


<div class="container text-white"><br>
  <h1>User Details</h1><br>
<div id="table1">
 <table class="table table-striped text-white">
  <tr>
    
    <th class="text-white">ID</th>
    <th class="text-white">Name</th>
    <th class="text-white">Email</th>
    <th class="text-white">Usertype</th>
    
  </tr>
 
  <?php 
$res=mysqli_query($con,"select * from user");
  $n=mysqli_num_rows($res);

$i=1;
 while($i<=$n)
    {

       $res=mysqli_query($con,"select * from user where id='$i'");
       $row=mysqli_fetch_assoc($res); 
      echo"<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email'] . "</td><td>". $row['usertype'] . "</td><tr>" ;
      $i++;
       
    }
 


  ?>

  </table>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
  $(document).ready(function()
  {
       $("#add").click(function()
       {
        var name= $("#name").val();
         if(!isNaN(name))
         {
          alert("Name should be string");
         }

       });
  });
</script>
</body>
</html>