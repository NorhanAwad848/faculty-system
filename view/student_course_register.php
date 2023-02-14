<?php session_start();?>
  

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="..\css\bootstrap-4.6.1-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="..\css\main.css"> 
<link rel="stylesheet" type="text/css"  href="../css/first.css" >
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css"  href="first.css" >
<meta charset="utf-8">
<meta name="viewport"  content="width-device-width,initial-scale=1">
<style>
  *{
    box-sizing: border-box;
  }
  @media only screen and (max-width: 620px) {
  /* For mobile phones: */
  .background, .ll,.mm {
    width: 100%;
  }}   
table, th, td {
    border: 1px solid black;
}

table
{
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width:100%;
}
td,th
{
	border: 1px solid #ddd;
  padding: 8px;
}
tr{
background-color: grey;

}
tr:nth-child(even){background-color: #f2f2f2;}
 tr:nth-child(odd){background-color: #ddd;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3247be;
  color: white;
}
</style>
</head>
<body class="background" class="ll">
<div class="mm">
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
          <a class="nav-link"style="color:white;" href="lab.html">pecificity parameter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="color:white;" href="contain.html">Units and centers</a>
        </li>
       </form>
      </ul>
    </nav>

<h2 style="color:white;">please select only five courses and if you select more than five one will be removed randomly and please dont choose two courses having the same time</h2>

<br><br>
<?php



if(isset($_POST["view"])&& $_SESSION['registered']=="false")
    { 
         
        include'C:\xampp\htdocs\faculty_system\model\course_class.php';
        $course =new course();

        $result=$course->show($_SESSION['level']);

        
           


        
       
    





if($result->num_rows>0)
{

echo " <div style='margin-left:100px;margin-right:100px;'><form action='../controller/course_register_controller.php' method='post'>
<table>
<tr>
<th>course id</th>
<th>subject code</th>
<th>subject name</th>
<th>day</th>
<th>time</th>
<th>room</th>
<th>assign</th>
</tr>";
$i=1;

while($row=$result->fetch_assoc())
{

    echo  "<tr><td>". $row['course_id']."</td><td>". $row['subject_code']."</td><td> " .$row['name']."</td><td> ".$row['day']."</td><td> ".$row['time']."</td><td> ".$row['room']."</td><td><input type='checkbox' name='".$i."' value='". $row['course_id']."'></td></tr> " ;


 

$i=$i+1;
}

echo "

<tr>
<td style=' border-width:0; '></td>
<td style=' border-width:0; '></td>
<td style='text-align:center;  border-width:0;'><button type='submit' name='assign' value='assign' class='btn btn-outline-primary'> Assign</button></td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr> 

</table>
</form></div>";


    }

    }
    else{
      
      
      
      header('location:../view/student_home.php');}
    

?>


<br>


<!--<a href='student_home.php'><input type='button'value='back'></a>-->
<a href='student_home.php'><button type="button" value="back" style="margin-left:590px;" class="btn btn-secondary btn-lg ">Back</button></a> 
</body>
</html>