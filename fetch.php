<?php

require_once('connect.php');

$output ='';

$r= $_POST['searchtext'];


echo $r;

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

?>