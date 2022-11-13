<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollimi.php");	
?>

<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Moduli Administratorit</title>
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
				    <h3>Shto të dhënat e projektit</h3>
					
					
				</header>
				<div class="container">
				 <div class="4u">
				<form enctype="multipart/form-data"  action="shtoProjekt.php" method="post" name="form1">
					<table width="25%" border="0">
					<tr>
				<select name="ID_Llojeteprojekteve">
					<option selected="selected">Zgjedh Llojin e Projektit</option>
						<?php
					    	$res=mysqli_query($lidh,"SELECT * FROM umpn_llojeteprojekteve");
							while($rreshti=$res->fetch_array())
								{
									?>
									<option value="<?php echo $rreshti['ID_Llojeteprojekteve']; ?>"><?php echo $rreshti['Llojeteprojekteve']; ?></option>
									<?php
								}
									?>
								</select><br />
								</tr>
												
												
								<tr> 
									<td>Emri</td>
									<td><input type="text" name="Emri"></td>
								</tr>
								<tr> 
									<td>Adresa</td>
									<td><input type="text" name="Adresa"></td>
								</tr>
								<tr> 
									<td>Pershkrimi</td>
									<td><input type="text" name="Pershkrimi"></td>
								</tr>
								<tr>
									<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
									<td><input name="userfile" type="file" /></td>
								</tr>
								<tr> 
									<td></td>
									<td><input type="submit" name="shtoProjekt" value="Shto"></td>
								</tr>	
			</table>
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