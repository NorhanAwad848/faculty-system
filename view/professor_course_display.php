<?php session_start();?>


<!DOCTYPE html>
<html lang="en">
<head>
<title> professor_course_display</title>
<link rel="stylesheet" type="text/css"  href="first.css" >
<link rel="stylesheet" href="../css/bootstrap-4.6.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/main.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css"  href="first.css" >
	<meta charset="utf-8">
	<meta name="viewport"  content="width-device-width,initial-scale=1">
<style>
  *{box-sizing: border-box;}
table
 { text-align: center;
    position:absolute;
     top:auto;
    right:380px;
    width:700px;
    height:200px;
    border:40px; 
    color:black;
    box-sizing: border-box;
     border: 1px solid black;
    border-collapse:collapse;   
 }
 tr:nth-child(even){background-color: #e7e4e4}
 tr:nth-child(odd){background-color: #ddd;}
 th {
    background-color: #3247be;
    color: white;
    }
    /* .td{
     padding-top:8px;
     font-size:15px;
    } */
table{margin-left:300px;}
@media only screen and (max-width: 620px) {
  /* For mobile phones: */
  .navbar, .btn, .btn {
    width: 100%;
  }}
</style>
</head>
<body class=" background">
<nav class="navbar navbar-expand-sm b bg-1b3783 navbar-1b3783" Style="background:#1b3783;">
<a class="navbar-brand" href="#">
    <img src="../src/images/hulb.png" alt="Logo" style="width:40px;">
  </a>
  <a class="navbar-brand" style="color:white;" href="#">Faculty of Computer and Information</a>
  <ul class="navbar-nav">
    <li class="nav-item-expand-sm b bg-red navbar-red">
      <a class="nav-link"style="color:white;" href="../index.php">Homepage</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"style="color:white;hover:white;" href="about.html">about the college</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" style="color:white;"href="#" id="navbardrop" data-toggle="dropdown">
        departments
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="is.html">IS . department</a>
        <a class="dropdown-item" href="cs.html">CS . department</a>
        <a class="dropdown-item" href="it.html">IT . department</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:white;"href="step.html">Academic Programs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:white;"href="professor_home.php">main page for profersor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"style="color:white;" href="lab.html">pecificity parameter</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"style="color:white;" href="contain.html">Units and centers</a>
    </li>
	<li><form action="../controller/Logout_Controller.php" method="post" class="form-inline" style="margin:0;">
			<button class="btn btn-outline-danger" type="submit" value="pr"  name="Logout">Logout</button></li><!-- log out button -->
		</form>
  </ul>
</nav>
<?php

if(isset($_POST["view"]))
    { 
         
        include'C:\xampp\htdocs\faculty_system\model\professor_course_class.php';
        $p_c =new professor_course();

    $result=$p_c->show_courses($_SESSION['national_id']);

           


       
       
    



       
 if($result->num_rows>0)
{
    

echo "<form action='professor_students_display.php' method='post'><table>
<tr>
<th>subject name</th>
<th>course id</th>
<th>time</th>
<th>day</th>
<th>room</th>
<th>students</th>
</tr>";

while($row=$result->fetch_assoc())
{
   
    echo  "<tr><td>". $row['name']."</td><td>". $row['course_id']."</td><td> " .$row['time']."</td><td>". $row['day']."</td><td>".
     $row['room']."</td><td><button type='submit'class='btn btn-outline-primary' name='view' value='".$row['course_id']."'>show</button> </td></tr> " ;




}
echo "</table></form>";
    }

    echo"<form action='../controller/Q_assign_controller.php' style='margin-top: 230px;margin-left:30%;' method='post'>

    <h5>
    <input id='question' type='text' name='question' placeholder='ENTER QUESTION'>

    
    <input id='course_id' type='text' name='course_id' placeholder='ENTER COURSE ID'>

    <input  type='submit' class='btn btn-outline-primary'name='submit' value='submit'>
     <a href='professor_home.php'><input type='button'value='back'  class='btn btn-outline-primary'></a> </h5>
    </form>";

    }



?>

    
</body>
</html>