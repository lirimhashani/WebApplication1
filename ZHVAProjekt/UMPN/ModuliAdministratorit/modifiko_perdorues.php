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
				    <h3>Kërko të dhënat e përdoruesit për modifikim</h3>
					
					
				</header>
				<div class="container">
				 	
	                <form action="" method="post">  
	
	                <table>
					<tr>
					
					</tr>
					<tr>

					<td>
					Shkruaj:
					</td>
					<td>
					<input type="text" name="term" placeholder="Përdoruesin ose Email-in"/>
				</td>
				<td> <input type="submit" value="Kërko" /></td>
				</tr>
				</table> 
				
				</form>
				<table width='80%' border=0>
					<div class="table-wrapper">
					<tr bgcolor='#CCCCCC'>
						<td>Përdoruesi</td>
						<td>Fjalëkalimi</td>
						<td>Email-i</td>
						<td>Modifiko</td>
					</tr> 
				<?php
				if (!empty($_REQUEST['term'])) {
				$term = mysqli_real_escape_string
				($lidh,$_REQUEST['term']);     
				$sql = mysqli_query($lidh,
				"SELECT * FROM umpn_perdoruesit 
				WHERE perdoruesi LIKE '%".$term."%' 
				OR  email LIKE '%".$term."%'"); 
				while($rreshti = mysqli_fetch_array($sql)) { 		
						echo "<tr>";
						echo "<td>".$rreshti['perdoruesi']."</td>";
						echo "<td>".$rreshti['fjalekalimi']."</td>";
						echo "<td>".$rreshti['email']."</td>";	
						echo "<td><a href=\"fresko.php?pid=$rreshti[pid]\" class='button' class='button primary'>
						Modifiko</a></td></tr>";		
					}

				}

				?>
				</div>
					</table>
				 
				 </div>
			</section>
			
		<!-- Two -->
		<!-- Three -->
		
		<!-- Footer -->

					<?php include_once("mbarimiFaqes.php"); ?>

	</body>
</html>