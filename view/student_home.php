<?php 
session_start();
if($_SESSION['username'] )
{?>

<head>
<link rel="stylesheet" href="..\css\bootstrap-4.6.1-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="..\css\main.css"> 

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
		<form action="../controller/Logout_Controller.php" method="post" class="form-inline" style="margin:0;">
			<button class="btn btn-outline-dark"  type="submit" value="st" name="Logout">Logout</button><!-- log out button -->
		</form>
       </form>
      </ul>
    </nav>
	
	<div class="container  rounded" style=" margin:10px 900px 60px 10px; width:30%; height: 250px; background-color:#59595a42;">
		
		<h6 style="color:white;" >name: <?php echo $_SESSION['name']; ?></h6>
		<h6 style="color:white;">username: <?php echo $_SESSION['username']; ?></h6>
		
	</div>
>


<form action='student_course_register.php' method='post'><!--................regisering course form..........................-->
	<div class="border rounded " style=" width:45%; height: 150px; margin-left:30% ; background-color:#59595a42;">
<FIeldset>
	
<legend  style="color:white;  padding-left:25%; ">view available courses to register</legend>
<br>
<input type="hidden" name="registered" value="<?php echo $_SESSION['registered'];?>">
<button type="submit"  value="view" name="view" style="margin-left:40%;" class="btn btn-secondary btn-lg formm">view</button>
</div><br>
<div class="border rounded  " style=" width:45%; height: 150px; margin-left:30% ;">
</fieldset></form>



<form action='student_course_display.php' method='post'><!--................viewing course form..........................-->
	
<FIeldset>
	
<LEgend  style="color:white; padding-left:25%;">view registered courses</LEgend>
<br>
<!--<input type='submit' name='view' value='view'>-->
<button type="submit"  value="view" name="view" style="margin-left:40%;" class="btn btn-secondary btn-lg formm">view</button>

</fieldset></form>
</div>

<div class="border rounded " style=" width:45%; height: 150px; margin-left:30% ; background-color:#59595a42;">
<form action='student_transcript.php' method='post'><!--................viewing transcript form..........................-->
	
<FIeldset>
<LEgend  style="color:white; padding-left:30%;">view transcript </LEgend>
<br>
<!--<input type='submit' name='view' value='view'>-->
<button type="submit"  value="view" name="view" style="margin-left:40%;" class="btn btn-secondary btn-lg formm ">view</button>
</div>
</fieldset></form>








</body>








<?php 
}
else
{
	header("location:../index.php");
}
?>