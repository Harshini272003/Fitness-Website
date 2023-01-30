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
    <link rel="stylesheet" type="text/css" href="css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
    
    <h1 class="h3 mb-3 fw-normal" style="color:#fff;">Edit a course</h1>

   <div class="form-floating">
     
   <select class="form-select" aria-label="Default select example" name="option" id="option">
   <option selected>Course Name</option>
 
 <?php
 $query="select * from course ";
 $result = mysqli_query($con,$query);
 $rows=mysqli_fetch_assoc($result); 
 $num=mysqli_num_rows($result);
    $str = "option";
    for($i=1;$i<=$num;$i++)
    {
       $res=mysqli_query($con,"select * from course where id='$i'");
       $row=mysqli_fetch_assoc($res); 
       echo "<option>".$row['title']."</option>";
       
    }


 ?>


<?php
  $option = $_POST['option'];
  $q="select * from course where title='$option'";
  $res=mysqli_query($con,$q);
  $r=mysqli_fetch_assoc($res);

  $lang=$r['language'];
  $loc=$r['location'];
  $da=$r['date'];
  $des=$r['description'];

  $c =$r['title'];

?>

 
</select>
 <div class="form-floating">
        <button class="w-100 btn btn-md btn-primary" type="submit">Edit Course</button>
  </div>
    </div>
</form  >
</main>

<main class="form-signin w-50 m-auto">
<form   action="<?=$_SERVER['PHP_SELF']?>" method="post">

     <div class="form-floating">
      <input type="text" class="form-control" id="title" placeholder="Course Name" name="name"  required value='<?php echo $c;?>' required>
      <label for="title">Course Name</label>
    </div>

    <div class="form-floating">
      <input type="text" class="form-control" id="language"  name="language" value='<?php echo $lang;?>'  required>
      <label for="Language">Language</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="location" name="location" value='<?php echo $loc;?>' required>
      <label for="location">Location</label>
    </div>
     <div class="form-floating">
      <input type="date" class="form-control" id="date"  name="date" value='<?php echo $date;?>' required>
      <label for="date">Date</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="description" name="description" value='<?php echo $des;?>' required>
      <label for="description">Description</label>
    </div>
 


   
    <br>


    <button class="w-100 btn btn-md btn-primary" type="submit" id="edit">Save the Edit</button>
 </form><br>
</main>
</div>

	<?php
if (!empty($_POST['name']))
{

  require_once('connect.php');
  //error_reporting(0);

  $cname = $_POST['name'];
  
  $language = $_POST['language'];
  $location = $_POST['location'];
  $date = $_POST['date'];
    //echo $cname.$language.$location.$date;

  $description =$_POST['description'];
  

  $query = mysqli_query($con, "SELECT * FROM course WHERE title='$cname' && language='$language' && location='$location' && date= '$date' && description='$description' ");
  $n = mysqli_num_rows($query); 
  $ro=mysqli_fetch_assoc($query);

if($n>0)
  {
      $message = "Course aldready there";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location.href='course_admin_edit.php';</script>";
  }

  else
  {
    $insert = "update course set title='$cname',language='$language',location='$location',date='$date',description='$description' where title='$cname'";
    mysqli_query($con,$insert);
     $message = "Updated Successfully";
     echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.location.href='course_admin_edit.php';</script>";

 }
 
}
?>

<div class="container text-white"><br>
  <h1>Course Details</h1><br>
<div id="table1">
 <table class="table table-striped text-white">
  <tr>
    
    <th class="text-white">Title</th>
    <th class="text-white">Language</th>
    <th class="text-white">Location</th>
    <th class="text-white">Date</th>
    <th class="text-white">Description</th>
    
  </tr>
 
  <?php 
$res=mysqli_query($con,"select * from course");
  $n=mysqli_num_rows($res);

$i=1;
 while($i<=$n)
    {

       $res=mysqli_query($con,"select * from course where id='$i'");
       $row=mysqli_fetch_assoc($res); 
 echo"<tr><td>".$row['title']."</td><td>".$row['language']."</td><td>".$row['location'] . "</td><td>". $row['date'] ."</td><td>".$row['description'] ."</td><tr>" ;
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
      $("#edit").click(function()
      {
             var name = $("#title").val();
             var language = $("#language").val();
             var location = $("#location").val();
             var description = $("#description").val();

             if(!isNaN(name) || !isNaN(language) || !isNaN(location) || !isNaN(description))
             {
              alert("No fields should be fully numbers");
             }

      });
  });
</script>
</body>
</html>