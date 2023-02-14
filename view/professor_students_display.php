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
 {

  
    text-align: center;
    position:absolute;
     top:auto;
    right:380px;
    width:750px;
    height:150px;
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
table{margin-left:300px;}
<style>
@media only screen and (max-width: 620px) {
  /* For mobile phones: */
  .navbar, .btn, .btn,.btn {
    width: 100%;
  }}
  </style>
</style>
</head>
<body class="background">
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
         
        include'C:\xampp\htdocs\faculty_system\model\student_course_class.php';
        $s_c =new student_course();

    $result=$s_c->show_course_students($_POST['view']);

           


       
       
    



       
 if($result->num_rows>0)
{
    

echo "<form action='../controller/grade_assign_controller.php' method='post'><table>
<tr>
<th>id </th>
<th>name </th>
<th>email</th>
<th>answer</th>
<th>grade</th>
</tr>";
$i=0;
while($row=$result->fetch_assoc())
{
   
    echo  "<tr><td>". $row['id']."</td><td>". $row['name']."</td><td> " .$row['email']."</td><td><a href=' " .$row['answer']."' download><input type='button' value='download file' class='btn btn-outline-primary'></a></td><td><input style=' width:30px;' type='text' name='".$i."'><input  type='hidden' name='".$i."S'value='". $row['id']."'></td></tr> " ;


$i=$i+1;

}
echo "
<input  type='hidden' name='course_id'value='". $_POST['view']."'> 
<tr>
<td style=' border-width:0; '></td>
<td style=' border-width:0; '></td>
<td style=' border-width:0; '></td>
<td style=' border-width:0; '></td>
<td style='text-align:center;  border-width:0;'><input type='submit'class='btn btn-outline-primary' name='assign' value='assign'></td>
</tr> 


</table></form>";
    }

    }



?>


<br><br><br>


<a href='professor_home.php'><input type='button'value='back'class="btn btn-outline-primary" style="margin-top:110px;margin-left:72%;"></a>
    
</body>
</html>