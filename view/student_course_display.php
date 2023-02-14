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
  .background, .image,.ll,.mm,.container mt-5,.border,.rounded {
    width: 100%;
  }} 
table, th, td {
    border: 1px solid black;
}

table
{
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 81%;
margin-left:8%;
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
	<br><br>




<?php
$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
$g="";
$h="";
$i="";
$j="";
$k="";
$l="";
$m="";
$n="";
$o="";
$p="";

$a2="";
$b2="";
$c2="";
$d2="";
$e2="";
$f2="";
$g2="";
$h2="";
$i2="";
$j2="";
$k2="";
$l2="";
$m2="";
$n2="";
$o2="";
$p2="";



if(isset($_POST["view"]))
    { 
         
        include'C:\xampp\htdocs\faculty_system\model\student_course_class.php';
        $s_c =new student_course();

        $result=$s_c->show_table($_SESSION['id']);

        



if($result->num_rows>0)
{

   

while($row=$result->fetch_assoc())
{
    if($row['day']=='sunday'&&$row['time']=='08:00:00')
    {$a=$row['name']; $a2="course id:".$row['course_id'];}
    else if($row['day']=='sunday'&&$row['time']=='10:00:00')
    {$b=$row['name']; $b2="course id:".$row['course_id'];}
    else if($row['day']=='sunday'&&$row['time']=='12:00:00')
    {$c=$row['name']; $c2="course id:".$row['course_id'];}
    else if($row['day']=='sunday'&&$row['time']=='14:00:00')
    {$d=$row['name']; $d2="course id:".$row['course_id'];}


    else if($row['day']=='monday'&&$row['time']=='08:00:00')
    {$e=$row['name']; $e2="course id:".$row['course_id'];}
    else if($row['day']=='monday'&&$row['time']=='10:00:00')
    {$f=$row['name']; $f2="course id:".$row['course_id'];}
    else if($row['day']=='monday'&&$row['time']=='12:00:00')
    {$g=$row['name']; $g2="course id:".$row['course_id'];}
    else if($row['day']=='monday'&&$row['time']=='14:00:00')
    {$h=$row['name']; $h2="course id:".$row['course_id'];}

    
    else if($row['day']=='wednesday'&&$row['time']=='08:00:00')
    {$i=$row['name']; $i2="course id:".$row['course_id'];}
    else if($row['day']=='wednesday'&&$row['time']=='10:00:00')
    {$j=$row['name']; $j2="course id:".$row['course_id'];}
    else if($row['day']=='wednesday'&&$row['time']=='12:00:00')
    {$k=$row['name']; $k2="course id:".$row['course_id'];}
    else if($row['day']=='wednesday'&&$row['time']=='14:00:00')
    {$l=$row['name']; $l2="course id:".$row['course_id'];}

    else if($row['day']=='thursday'&&$row['time']=='08:00:00')
    {$m=$row['name']; $m2="course id:".$row['course_id'];}
    else if($row['day']=='thursday'&&$row['time']=='10:00:00')
    {$n=$row['name']; $n2="course id:".$row['course_id'];}
    else if($row['day']=='thursday'&&$row['time']=='12:00:00')
    {$o=$row['name']; $o2="course id:".$row['course_id'];}
    else if($row['day']=='thursday'&&$row['time']=='14:00:00')
    {$p=$row['name']; $p2="course id:".$row['course_id'];}


    

}

  }

    }
    




?>
<br>
<h4 style="color:white; padding-left:40%;">This is Your Timetable</h4>
<br>
<table  >

<tr>   <th>          </th>  <th>8:00</th>  <th>10:00</th>  <th>12:00</th>  <th>2:00</th>  </tr>

<tr>   <td> sunday   </td>  <td> <?php echo $a;?> <br><?php echo $a2;?>   </td>  <td> <?php echo $b;?> <br><?php echo $b2;?>    </td>  <td> <?php echo $c;?> <br><?php echo $c2;?>    </td>   <td><?php echo $d;?> <br><?php echo $d2;?>   </td>  </tr>

<tr>   <td>monday    </td>  <td> <?php echo $e;?> <br><?php echo $e2;?>  </td>  <td> <?php echo $f;?> <br><?php echo $f2;?>   </td>  <td> <?php echo $g;?>  <br><?php echo $g2;?>  </td>   <td> <?php echo $h;?> <br><?php echo $h2;?> </td>  </tr>

<tr>   <td>tuesday   </td>  <td></td><td></td><td></td><td></td> </tr>

<tr>   <td>wednesday </td>  <td><?php echo $i;?> <br><?php echo $i2;?>   </td>  <td> <?php echo $j;?>  <br><?php echo $j2;?>  </td>  <td>  <?php echo $k;?>  <br><?php echo $k2;?> </td>   <td><?php echo $l;?> <br><?php echo $l2;?>  </td>  </tr>

<tr>   <td>thursday  </td>  <td> <?php echo $m;?>  <br><?php echo $m2;?> </td>  <td> <?php echo $n;?> <br><?php echo $n2;?>   </td>  <td> <?php echo $o;?>  <br><?php echo $o2;?>  </td>   <td><?php echo $p;?> <br><?php echo $p2;?>  </td>  </tr>


</table>


<br><br>
<h4 style="color:white; padding-left:40%;">Answer the questions</h4>
<br>
<?php

        $s_c =new student_course();

        $result=$s_c->show_questions($_SESSION['id']);

        if($result->num_rows>0)
        {
        
        echo "<div style='width=100%'><table>
        <tr>
        <th>name</th>
        <th>question</th>
        
        </tr>";
        while($row=$result->fetch_assoc())
        {
            echo  "<tr><td>". $row['name']."</td><td>". $row['question']." </td></tr> " ;
        
        
        
        
        }
        echo "</table></div>";
            }
        







?>
<br><br><br>

<form action='../controller/answer_upload_controller.php' class="borderr rounded" style="padding: 60px 18px 25px 10px; "  method='post' enctype="multipart/form-data">
<br>
<input  placeholder="ENTER COURSE ID" style="width:50%;height:50px; border-radius: 7px;border-color:white; border: width 0;  margin-left:200px; " type='text'  name='course_id'>
<br><br>
<!--<input id='file' placeholder="UPLOAD ANSWER"   type='file'  name='file'>-->
<div class="mb-3">
  <input class="form-control" type="file" style="width:50%; margin-left:200px;" name="file" >
</div>

<input  type='hidden' name='id' value='<?php echo $_SESSION['id'];?>'>
<br><br>
<button type="submit" style="margin-left:290px;margin-right:90px;" value="upload" name="upload" class="btn btn-secondary btn-lg formm">submit</button>
<a href='student_home.php'><button type="button" value="back" name="upload" class="btn btn-secondary btn-lg formm">Back</button></a>
<br><br>
</form>



    
    
</body>
</html>