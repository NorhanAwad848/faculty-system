<!DOCTYPE html>
<html lang="en">

<head>
    
<link rel="stylesheet" href="css/bootstrap-4.6.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">
</head>

<body class="background">
<nav class="navbar navbar-expand-sm b bg-1b3783 navbar-1b3783" Style="background:#1b3783;">
<a class="navbar-brand" href="#">
    <img src="src/images/hulb.png" alt="Logo" style="width:40px;">
  </a>
  <a class="navbar-brand" style="color:white;" href="#">Faculty of Computer and Information</a>
  <ul class="navbar-nav">
    <li class="nav-item-expand-sm b bg-red navbar-red">
      <a class="nav-link"style="color:white;" href="index.php">Homepage</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"style="color:white;hover:white;" href="view/about.html">about the college</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" style="color:white;"href="#" id="navbardrop" data-toggle="dropdown">
        departments
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="view/is.html">IS . department</a>
        <a class="dropdown-item" href="view/cs.html">CS . department</a>
        <a class="dropdown-item" href="view/it.html">IT . department</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:white;"href="view/step.html">Academic Programs</a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link"style="color:white;" href="view/lab.html">specificity parameter</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"style="color:white;" href="view/contain.html">Units and centers</a>
    </li>
	
	
  </ul>
</nav>

    <div class="container mt-5"  >
    
        <form action="controller\Login_Controller.php" method="post">
            <div class="form-group border rounded  p-5 formm" style=" border: 10px;px solid;border-color:black;">
                
                <input style="margin-left:75px;"  type="text"  name="username" class="form-control" placeholder="ENTER USERNAME" required> <!-- user text field --><br>

				<input style="margin-left:75px;" type="password" name="password" class="form-control" placeholder="ENTER PASSWORD" required> <!-- password text field--><br>
				
				
				<label for="pr" style="color:white; margin-left:100px;" >professor</label>
				<input  id="pr"style="margin-left:380px;" id="pr" type="radio" name="type"  value="pr"  required><!-- pr type --><br>
				
				<label for="st" style="color:white; margin-left:100px;" >student</label> 
			    <input  id="st" style="margin-left:392px;" id="st" type="radio" name="type" value="st" ><!-- st type --><br>

				<label for="ad" style="color:white; margin-left:100px;" >admin</label>
			    <input  id="ad"  style="margin-left:402px;" id="ad" type="radio" name="type" value="ad"  ><!-- ad type --><br>
			
            <button style="margin-top:100px;" type="submit" name="login" value="login" class="btn btn-light formm">login</button><!-- submit button -->
            <a href="view\register.php"><input  style="margin-left:650px;margin-top:-60px;" class="btn btn-light formm" type="button" name="register" value="register"></a><!-- register button -->
            
            <div class="form-group">
                
                
            
			
			<div class="form-group" >

			
			
		</form><br>


		
		
    </div>
	
	
	<!-- Modal -->
	<div class="modal" id="exampleModal">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Login failed</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			Username or password is wrong!
			Please login again
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>

	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="css/bootstrap-4.6.1-dist/js/bootstrap.min.js"></script>
	
	
	<?php if(isset($_GET['id'])) { 
		$url = strtok($_SERVER['REQUEST_URI'], '?');
	?>
		<script>
			console.log("yes");
			var myModal = new bootstrap.Modal(document.getElementById('exampleModal'))
			myModal.show()
			
			// remove query string
			window.history.pushState({}, '', '<?php echo $url; ?>');
		</script>
	<?php } ?>
</body>

</html>