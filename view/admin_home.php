
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
	
	<div class="container">
		
		
		
		
	</div>
	<br><br>
<!--.................................shows the number of professors and students.................................-->
<?php

 include'C:\xampp\htdocs\faculty_system\model\professor_class.php';
 include'C:\xampp\htdocs\faculty_system\model\student_class.php';

 $professor=new professor();
 $student=new student();
  $result=$professor->shownumber();
  $result2=$student->shownumber();


?>
<div style="background-color:black;  ">
<h2 style="color:white;">
<pre style="color:white;">              the number of professors:<?php echo $result;?>         the number of students:<?php echo $result2;?>   </pre>

</h2>
</div>


<!--................................................forms of admin.................................................-->


<!--................................................insertion forms .................................................-->


<form action='../controller/admin_controller.php' method=post><!--.............subject insertion form-->
	<fieldset>
		<legend style="color:white;">insert subject</legend>


		
		<input id='name' type='text' name='name' placeholder="ENTER NAME" required> <!--subject name field-->


		<input id='description' type='text' name='description'  placeholder="ENTER DESCRIPTION" required> <!--subject description field-->


	
		<input id='semester' type='text' name='semester'  placeholder="ENTER SEMESTER" required> <!--subject semester field-->

		
		<input id='code' type='text' name='code'  placeholder="ENTER CODE" required> <!--subject code field-->

        <select id="level" name="level"  required><!--subject level field-->
		    <option style="display:none;">SELECT LEVEL</option>
		    <option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select> 

		<input type='hidden' name='type' value='subject'  required> <!--insert type-->


		<input  type='submit' name='submit' value='submit'   required> <!--submit-->




	</fieldset>
</form><br><br>





<form action='../controller/admin_controller.php' method=post><!--.............course insertion form-->
	<fieldset>
		<legend style="color:white;">insert course</legend>

		
		<select id="day" name="day" required><!--course day field-->
		<option style="display:none;">SELECT DAY</option>
			<option value="sunday">sunday</option>
			<option value="monday">monday</option>
			<option value="wednesday">wednesday</option>
			<option value="thursday">thursday</option>
		</select> 


	
		<input id='name' type='time' ; name='time' required> <!--course time field-->


		<input id='subject_code' type='text' name='subject_code' placeholder="ENTER SUBJECT CODE" required> <!--subject code field-->
         
		<select id="room" name="room" required><!--course room field-->
		<option style="display:none;">CHOOSE ROOM</option>
			<option value="hall 1">hall 1</option>
			<option value="hall 2">hall 2</option>
			<option value="hall 3">hall 3</option>
			<option value="hall 4">hall 4</option>
		</select> 

		<input type='hidden' name='type' value='course' required> <!--insert type-->


		<input  type='submit' name='submit' value='submit' required> <!--submit-->




	</fieldset>
</form><br><br>



<form action='../controller/admin_controller.php' method=post><!--.............professor insertion form-->
	<fieldset>
		<legend style="color:white;">insert professor</legend>

	
		<input id='name1' type='text' name='name' placeholder="ENTER NAME" required> <!--professor name field-->


		
		<input id='DOB' type='date' name='DOB' placeholder="ENTER D.O.B" required> <!--professor date of birth field-->


		
		


		
		<input id='degree' type='text' name='degree'  placeholder="ENTER  DEGREE" required> <!--professor degree field-->
		
		<input id='username' type='text' name='username'   placeholder="ENTER USERNAME" required> <!--professor username field-->


		
		<input id='password' type='text' name='password'   placeholder="ENTER PASSWORD" required> <!--professor password field-->

    
		<input id='national_id' type='text' name='national_id' placeholder="ENTER N.ID"  required> <!--professor national id field-->

		<br><br>

		<select id="department" name="department" required> <!--professor department field-->
		   <option style="display:none;">CHOOSE DEPARTMENT</option>
		    <option value="IS">IS</option>
			<option value="IT">IT</option>
			<option value="CS">CS</option>
			<option value="SWE">SWE</option>
		</select>
		


		<select id="gender" name="gender"  required> <!--professor gender field-->
		    <option style="display:none;">CHOOSE GENDER</option>
		    <option value="male">male</option>
			<option value="female">female</option>
        </select>

		<input type='hidden' name='type' value='professor' required> <!--insert type-->


		<input  type='submit' name='submit' value='submit' required> <!--submit-->



	</fieldset>
</form><br><br>

<!--................................................ display forms................................................-->

<form action='admin_professors_display.php' method=post><!--.............professor display form-->
	<fieldset>
		<legend style="color:white;">display professors</legend>


		
		<select id="department" name="department"  required><!--select department field-->
		<option style="display:none;">ENTER DEPARTMENT</option>
		<option value="IS">IS</option>
			<option value="IT">IT</option>
			<option value="CS">CS</option>
			<option value="SWE">SWE</option>
		</select> 
        

		<input  type='submit' name='search' value='search' required> <!--submit-->


		
	</fieldset>
</form><br><br>




<form action='admin_students_display.php' method=post><!--.............students display form-->
	<fieldset>
		<legend style="color:white;">display students</legend>


		
        

		<input  type='submit' name='searchs' value='search' required> <!--submit-->


		
	</fieldset>
</form>


</body>


