<?php
error_reporting(0);

require_once('connect.php');
$query="select * from course";
$result = mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($result); 

$num=mysqli_num_rows($result);
 ?>

 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Fittest</title>
 <link rel="shortcut icon" href="./images/favicon.png" type="image/svg+xml">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  

    <!-- Favicons -->

<meta name="theme-color" content="#712cf9"> 


    <style>
      td
      {
        text-align: left;
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
    </style>

      <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- Custom styles for this template -->
   
  </head>



  <body class="text-center" style="background-image:url(images/bg-course.jpg);">

     <nav class="navbar  navbar-expand-md navbar-dark bg-dark">
   
        <h1 id="h1" class="navbar-brand"><span style="color:#FF1E00">Fit</span>test</h1>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
       
          <ul class="navbar-nav navbar-nav ml-auto">
            <li class="nav-item">
              <a id="link" class="nav-link text-white" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="home.html #about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="disp_course.php">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="media.html">Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="diet.html">Diet Plan</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="map.html">Find Us</a>
            </li>
             <li class="nav-item">
              <a class="nav-link text-white" href="login.html">Join Now</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="home.html #footer">Contact</a>
            </li>
          </ul>
      
      </div>
    </nav>

<main class="form-signin w-25 m-auto" style="padding-top:50px">
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post" >
    
    <h1 class="h3 mb-3 fw-normal text-white">Register a course</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="name" placeholder="name@example.com" name="name" required>
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="Password" name="email" required>
      <label for="floatingPassword">Email Id</label>
    </div>
    <div class="form-floating">
     
   <select id="option" class="form-select" aria-label="course" name="option" required>
   <option selected>Select Course</option>
 
 <?php
 
    $str = "option";
    for($i=1;$i<=$num;$i++)
    {
       $res=mysqli_query($con,"select * from course where id='$i'");
       $row=mysqli_fetch_assoc($res); 
       echo "<option>".$row['title']."</option>";
       
    }
 ?>

 
</select>
    </div><br>


    <button id="register" class="w-100 btn btn-lg btn-primary" type="submit">Register</button><br><br><br>
 
 </form>
</main>


<?php
if (!empty($_POST['name']))
{
    require_once('connect.php');
  //error_reporting(0);
  
  // Get variables
  $name = $_POST['name'];
  $email = $_POST['email'];
  $course = $_POST['option'];
  

  $query = mysqli_query($con, "SELECT * FROM register_course WHERE email='$email'");

  $n = mysqli_num_rows($query); 
  $ro=mysqli_fetch_assoc($query);

  if($n>0 && $ro['course']==$course)
  {
      $message = "Course aldready Registered";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location.href='course.php';</script>";
  }
  else
  {
    $insert = "insert into register_course values('$name','$email','$course')";
    mysqli_query($con,$insert);
     $message = "Registration Successful";
      echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.location.href='course.php';</script>";

  }
 

   
}
?>

<div class="container" id="main">

 <h2 align="left" class="text-white">Search course</h2>



  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search by Course Name" aria-label="coursename" aria-describedby="basic-addon2" name="search_text" id="search_text">
     <div class="input-group-append">
        <button class="btn btn-primary" id="search" type="submit">Search</button>
      </div>
      </div>
      

  </form>
  <?php


  ?>





<div id="result">

 <table class="table table-striped text-white" >
  <tr>
    
    <th class="text-white">Title</th>
    <th class="text-white">Language</th>
    <th class="text-white">Location</th>
    <th class="text-white">Date</th>
    <th class="text-white">Description</th>

  </tr>
    <?php 
     
     if (!empty($_POST['search_text']))
{

        require_once('connect.php');

       $output ='';
       $r= $_POST['search_text'];

  
     

       $sql ="select * from course where title like '%".$r."%'";
       $result=mysqli_query($con,$sql);
       if(mysqli_num_rows($result)>0)
      {
            while($row = mysqli_fetch_assoc($result))
            {

                $output .= "<tr><td>".$row['title']."</td><td>".$row['language']."</td><td>".$row['location'] . "</td><td>". $row['date'] . "</td><td>". $row['description'] ."</td></tr>";

            }
      echo $output;
}
else
{
  $output= "Data not found";
}


}
      ?>
      </table>
  </div>


</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 <script>
   $(document).ready(function()
   {

      //$("#result").hide();



       $("#search").click(function()
       {

        var txt = $("#search_text").val();
        
        if(txt=='')
        {
         
          alert("Search bar is empty");
        }
        
        
       });


       $("#register").click(function()
       {
        var name = $("#name").val();
        var email = $("#email").val();
        var course = $("#option").val();
        if(name=="" || !isNaN(name))
        {
          alert("Name field should not be empty and it should not be numbers");

        }
       
        if(email=="")
        {
          alert("Email field should not be empty");
        }
        if(course=="Select Course")
        {
          alert("Select course to Register");
        }






       });
        


   });
 </script>


</body>

  


</html>
