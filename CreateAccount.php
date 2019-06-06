<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/titlelogo.ico" />
	<title>Maersk Line</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"/>
	<!-- this below for card animated hover -->
	<script src="https://cdnjs.cloudflare.com/ajax/lib/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/fontawesome.min.css" rel="stylesheet">
	<!-- scroll up button -->
	<script src="main.js"></script>

	
<script>	
/* start-card hover function*/
$(document).ready(function(){
	$('.card').hover(
	//trigger when mouse hover
	function(){
		$(this).animate({
			marginTop: "-=1%",
		},200);
	},
	//trigger when mouse out 
	function(){
		$(this).animate({
			marginTop: "0%"
		},200);
	}
	
	);
});
</script>

</head>
<body id="fixed">
    <form  method="post">
	<!-- Create Account page -->
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" ><center>
		  <img src="img/mainlogo.png"></center>
		  <p></p>
            <h5 class="card-title text-center">Create a New Account</h5>
             <div class="form-group">
                <label class="user"><span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span> Username </label>
				<input class="form-control" type="text" name="username" placeholder="Enter Username" required>
				<label class="user" style="padding-top: 10px;"><span class="input-group-addon"><i class="fas fa-key"></i></span> Password</label>
				 <input class="form-control" type="password"  name="password" placeholder=" Enter Password" required>
				 <label class="user" style="padding-top: 10px;"><span class="input-group-addon"><i class="fas fa-envelope"></i></span> Email</label>
				 <input class="form-control" type="text" name="email" placeholder="Enter email ID" required><p></p>
				 <label class="user"><span class="input-group-addon"><i class="fas fa-users"></i></span> Role </label>
        <select class="form-control" name="role">
          <!-- <option value="1">Admin</option> -->
          <option value="2">Agent</option>

        </select>
		<p></p><center>
        <Button class='btn btn-primary' type="submit" name="submit">Create</button></center>
       
   

<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'CMSDB';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}


  if(isset($_POST['submit'])){

        $data_missing = array();

        if(empty($_POST ['username'])){
          $data_missing[]="Username is missing";

        }else{
          $Username = trim($_POST ['username']);

        }

        if(empty($_POST ['password'])){
          $data_missing[] = "Password is missing";
        }else{
          $Password = trim($_POST ['password']);

        }

        if(empty($_POST ['email'])){
          $data_missing[]="Email is missing";
        }else{
          $Email = trim($_POST ['email']);

        }
        if(empty($_POST ['role'])){

        }else{
          $Status = trim($_POST ['role']);

        }
      
        if(empty($data_missing)){

        }else{
          foreach($data_missing as $missing){
                echo '<p style="color:red;">'.$missing.'</p>';

        }

      }


      if(empty($data_missing)){
        if($stmt = mysqli_prepare($conn,"INSERT INTO user(username,password,email,role)VALUES(?,?,?,?)")){
          mysqli_stmt_bind_param($stmt,'sssi',$Username,$Password,$Email,$Status);
          mysqli_stmt_execute($stmt);
          printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
          mysqli_stmt_close($stmt);
          header("Location:https://localhost/index.php");
        }

        // Close the connection
   // mysqli_close($dbc);
      }
    }



         ?>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</body>

</html>
