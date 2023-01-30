
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
<div   style="background-image: url('images/bg-course.jpg'); " >
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
require_once('connect.php');
error_reporting(0);
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
</body>
</html>