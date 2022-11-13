<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollimi.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['fresko']))
{	
	$pid = $_POST['pid'];
	
	$perdoruesi=$_POST['perdoruesi'];
	$fjalekalimi=$_POST['fjalekalimi'];
	$email=$_POST['email'];	
	
	// checking empty fields
	if(empty($perdoruesi) || empty($fjalekalimi) || empty($email)) {	
			
		if(empty($perdoruesi)) {
			echo "<font color='red'>Fusha 'Perdoruesi' eshte e zbrazet!</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Fusha 'Fjalekalimi' eshte e zbrazet!</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Fusha 'Email' eshte e zbrazet!</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidh,"UPDATE umpn_perdoruesit SET perdoruesi='$perdoruesi',fjalekalimi='$fjalekalimi',email='$email' WHERE pid=$pid");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: modifiko_perdorues.php");
	}
}
?>
<?php
//getting pid from url
$pid = $_GET['pid'];

//selecting data associated with this particular pid
$rezultati = mysqli_query($lidh,"SELECT * FROM umpn_perdoruesit WHERE pid=$pid");

while($rez = mysqli_fetch_array($rezultati))
{
	$perdoruesi = $rez['perdoruesi'];
	$fjalekalimi = $rez['fjalekalimi'];
	$email = $rez['email'];
}
?>

<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Modifikimi i perdoruesëve</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
		
			<?php include_once("meny.php"); ?>
			

		<!-- Banner -->
		
			<?php include_once("titulliFaqes.php"); ?>
			

		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
				<p style="text-align:center;">Përshëndetje, <em><?php  echo $kyq_perdorues;?>!</em></p>
				    <h3>Modifiko të dhënat e përdoruesit</h3>
					
					
				</header>
				<div class="container">
				 <div class="4u">
                 <form username="form1" method="post" action="fresko.php">
				Përdoruesi
				<input type="text" name="perdoruesi" value='<?php echo $perdoruesi;?>' />
				Fjalëkalimi
				<input type="text" name="fjalekalimi" value='<?php echo $fjalekalimi;?>' />
				Email-i
				<input type="text" name="email" value='<?php echo $email;?>' />
				<input type="hidden" name="pid" value='<?php echo $_GET['pid'];?>' />
				<br>
				<input type="submit" name="fresko" value="Modifiko">
				</form>
				</div>
				 
				 </div>
			</section>
			
		<!-- Two -->
		<!-- Three -->
		
<!-- Footer -->

			<?php include_once("mbarimiFaqes.php"); ?>

	</body>
</html>