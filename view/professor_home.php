
<?php 
session_start();
if($_SESSION['username'] )
{?>

<head>
<title> professor_home</title>
<link rel="stylesheet" type="text/css"  href="../css/first.css" >
<link rel="stylesheet" href="../css/bootstrap-4.6.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/main.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css"  href="first.css" >
	<meta charset="utf-8">
	<meta name="viewport"  content="width-device-width,initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
  *{box-sizing: border-box;}
@media only screen and (max-width: 620px) {
  /* For mobile phones: */
  .navbar navbar-expand-sm, .po, .poo,.pooo {
    width: 100%;
  }}
  </style>
<body class="ll background">
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
</body>

<br><br><br>
<div class="nn">
 <div class="po">	 
	<ul id="list">
<h5>  welcome, <?php echo $_SESSION['name'];  ?></h5>
<ul> </div>
	<div class="poo">
	<ul id="list">
	<h5 > Name: <?php echo $_SESSION['name']; ?></h5>
	<h5> Username: <?php echo $_SESSION['username']; ?></h5>
</ul>
	</div>
<nav class="pooo">
	<form action='professor_course_display.php' method='post'><!--................viewing course form..........................-->
	
	<FIeldset>
		
	<LEgend><h5> To view your courses</h5></LEgend>
	
	<input class="btn btn-outline-dark" type='submit' name='view' value='view'>
	
	</fieldset></form>
</nav>
</div>








</body>


<?php 
}
else
{
	header("location:../index.php");
}
?>