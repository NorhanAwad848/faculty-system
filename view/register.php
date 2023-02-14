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
  .background, .image,.ll,.mm,.container mt-5 {
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
       </form>
      </ul>
    </nav>    
	<br><br>

    <div class="container mt-5"  >
         
        <form action="..\controller\Register_Controller.php" method="post" >
            <div    class="form-group borderr rounded  p-5 formm" style=" border: 10px;px solid;border-color:black;">

               
                <input id="name" type="text"  name="name" placeholder="ENTER YOUR NAME" class="form-control formm" required> <!-- name text field -->
                <br>
				
                <input id="age" type="text"  name="age" placeholder="ENTER YOUR AGE" class="form-control formm" required> <!-- age text field --> 
                <br>
				
                <input id="username" type="text"  name="username" placeholder="ENTER YOUR USERNAME" class="form-control formm" required> <!-- username text field -->
                <br>
				
                <input id="email" type="email"  name="email"  placeholder="ENTER YOUR EMAIL"class="form-control formm" required> <!-- email text field -->
                <br>
				
                <input id="password" type="password"  name="password"  placeholder="ENTER YOUR PASSWORD"class="form-control formm" required> <!-- password text field -->
                <br>
				
                <input id="phone_number" type="text"  name="phone_number"  placeholder="ENTER YOUR PHONE NUMBER"class="form-control formm" required> <!-- phone number text field --><br>
                <br>
			
                <select  name="level" class=" form-select form-control formm" aria-label="Default select example" required>	 <!-- level text field -->
                   <option style="display:none;" selected>Level</option>
                   <option value="1">LEVEL 1</option>
                   <option value="2">LEVEL 2</option>
                   <option value="3">LEVEL 3</option>
                   <option value="3">LEVEL 4</option>
                </select>
                <br>
                <button type="submit" value="submit" name="register" class="btn btn-light formm">submit</button>
             
</div>

		</form>
		
	
	
	

</body>

</html>