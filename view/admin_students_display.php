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
  .background, .image,.ll,.mm {
    width: 100%;
  }}   
table, th, td {
    border: 1px solid black;
}

table
{
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
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
<body class="background" class=ll>
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
	<br><br>
<?php

if(isset($_POST["searchs"]))
    { 

        include'C:\xampp\htdocs\faculty_system\model\student_class.php';
        $student =new student();

        $result=$student->search();

        
           


        
       
    





if($result->num_rows>0)
{

echo "<div style='margin-left:100px;margin-right:100px;'><table>
<tr>
<th>name</th>
<th>age</th>
<th>username</th>
<th>email</th>
<th>password</th>
<th>level</th>
<th>GPA</th>
<th>id</th>
<th>phone number</th>
</tr>";
while($row=$result->fetch_assoc())
{
    echo  "<tr><td>". $row['name']."</td><td>". $row['age']."</td><td> " .$row['username']."</td><td>". $row['email']."</td><td>".
     $row['password']."</td><td>". $row['level']."</td><td>" .$row['GPA']."</td><td>" .$row['id']." </td><td>".$row['phone_number']."</td></tr> " ;




}
echo "</table></div>";
    }

    }


   
?>

<br><br><br>
<a href='admin_home.php'><input type='button'value='back'></a>
    
</body>
</html>