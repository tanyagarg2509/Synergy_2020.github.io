<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Ignite-Synergy</title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Ignite'20" />
        <meta name="keywords" content="Ignite'20" />
        <meta name="author" content="Ignite'20" />
      
        <meta property="og:site_name" content="Ignite'20" />
       
    <meta property="og:description" content="Ignite'20" />
    <meta property="og:title" content="Ignite'20" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://ignite.com/" />
    <link rel="shortcut icon" href="public/img/ignite.jpeg>
  
  <link rel="shortcut icon" href="public/img/synergy.jpeg">
      <link rel="stylesheet" href="styleModal.css">

  
</head>
<body>
<?php
error_reporting('E_ALL ^ E_NOTICE');

$servername = "localhost";
$username = "cpc10nylwhfv";
$password = "Ignite@123";
$db = "dbignite";

$conn = mysqli_connect($servername, $username, $password, $db);

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['submit'])){

	$name= $_POST['name'];
	$email= $_POST['email'];
	$college= $_POST['college'];
	
	$contact= $_POST['contact'];
	$password= $_POST['password'];


	$q=mysqli_query($conn,"select * from signup where Email='".$email."' and Password='".$password."' ") or die(mysqli_error());
	$n=mysqli_fetch_row($q);
	
	if($n>0){
		$er='You have already signed up using this Email Id and Password.';
		echo "<script>alert('$er')</script>";									
		header("refresh:0,signup.php");
		
	}else{
		$insert=mysqli_query($conn,"insert into signup(Name, Email, College, Contact, Password) values('".$name."','".$email."','".$college."','".$contact."','".$password."')") or die(mysqli_error());

		if($insert){
			$er='You have successfully signed up. Take screenshot of the generated pass.';
			echo "<script>alert('$er')</script>";
			?>
<!-- Modal screen  for sign up here -->	

	   <div id="modal-guess" class="modal-guess">
	        <div class="modal-guess__inner">
	            <div class="modal-guess__inner-border">
	                <div class="modal-guess__top">
	                    <span id="modal-guess__close" ><a href="index.html" style="font-size: calc(14px + (22 - 14) * ((100vw - 300px) / (1400 - 300)));;color:white;text-decoration:none;" >X</a></span>
	                </div>
	                <div class="modal-guess__middle">


	                	<p class="modal-guess__text"><?php 
	                	$result =mysqli_query($conn,"SELECT id FROM signup WHERE Email='".$email."' and Password='".$password. "' ") or die(mysqli_error());;
						$row = mysqli_fetch_array($result);		
	                	echo $row['id']; ?></p>
	                    <h2 class="modal-guess__title">SYNERGY<br>IGNITE 2020</h2>
	                    <p class="modal-guess__text">
	                    Indira Gandhi Delhi Technical University For Women
	                    <br>
	                    15th Feb - 16th Feb
	                    <br>
	                    Saturday + Sunday 
	                    <br>
	                    10:00 AM to 5:00 PM
	                    <br>
	                    <p>VENUE:Jawahar Lal Nehru Stadium</p> 
	                    <br>
	                    <p id="student-detail-phone">
	                    	Name: <span style="word-break: break-all"><?php echo $name; ?></span>
	                    	<br>
	                    	Email: <span style="word-break: break-all"><?php echo $email; ?></span>
	                    	<br>
	                    	Contact: <?php echo $contact; ?>
	                    	<br>
	                    	College: <span style="word-break: break-all"><?php echo $college; ?></span>
	                    	<br>
	                    </p>
	                    	<br><span class="note">THIS PASS DOES NOT GUARANTEE YOUR ENTRY IN THE FEST, YOUR TIMING DOES.</span>
	                    </p>
	                </div>
	            </div>
	        </div>
	    </div>
	    <script  src="indexModal.js"></script>
<!-- modal screen end -->

		<?php
		}else{
			$er='Sign Up unsuccessful. Please try again.';
			echo "<script>alert('$er')</script>";
			header("refresh:0,pass.html");
		}
	}
}else{
		echo "<script>alert('Please try again later');</script> ";
		header("refresh:0,pass.html");
}

?>
</body>
</html>
