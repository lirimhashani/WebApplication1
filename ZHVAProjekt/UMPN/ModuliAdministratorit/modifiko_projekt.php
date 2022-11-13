<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te uogohet me sukses */
	include("kontrollimi.php");	
?>
<?php
//including the database connection file
include_once("konfigurimi.php");

//fetching data in descending order (lastest entry first)
$rezultati = mysqli_query($lidh,
"SELECT * FROM umpn_llojeteprojekteve ORDER BY ID_Llojeteprojekteve DESC");
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
				    <h3>Kërko të dhënat e uojeve te projekteve për modifikim</h3>
					
					
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
					<input type="text" name="term" placeholder="Projektin"/>
				</td>
				<td> <input type="submit" value="Kërko" /></td>
				</tr>
				</table> 
				
				</form>
				<table width='80%' border=0>
					<div class="table-wrapper">
					<tr bgcolor='#CCCCCC'>
						<td>Emri</td>
						<td>Adresa</td>
						<td>Pershkrimi</td>
						<td>Lloji i Projektit</td>
						<td>Foto</td>
						<td>Emri dosjes</td>
						<td>Modifiko</td>
					</tr> 
				<?php
	if (!empty($_REQUEST['term'])) {

	$term = mysqli_real_escape_string($lidh,$_REQUEST['term']);     

	$sql = mysqli_query($lidh,	
"SELECT
	u.ID_Projekti,
  u.Emri,
  u.Adresa,
  u.Pershkrimi,
  ll.Llojeteprojekteve,
  u.foto,
  u.emrifotos

FROM
  umpn_projekti u
INNER JOIN
  umpn_llojeteprojekteve ll ON u.ID_Llojeteprojekteve = ll.ID_Llojeteprojekteve
WHERE
  u.Emri LIKE '%".$term."%' OR u.Adresa LIKE '%".$term."%'"
	); 

	while($rreshti = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
			echo "<td>".$rreshti['Emri']."</td>";
			echo "<td>".$rreshti['Adresa']."</td>";
			echo "<td>".$rreshti['Pershkrimi']."</td>";
			echo "<td>".$rreshti['Llojeteprojekteve']."</td>";
			
			echo "<td><img src=data:image/jpeg;base64,".base64_encode($rreshti['foto'])." width='80'  height='100'/></td>";
			echo "<td>".$rreshti['emrifotos']."</td>";	
			
			
			echo "<td><a href=\"fresko_projektin.php?ID_Projekti=$rreshti[ID_Projekti]\" class='button' class='button primary'>Modifiko</a> </td>";			
		}

	}

	?>
				</table>
				</div>
				</div>
					
				 
				
			</section>
			
		<!-- Two -->
		<!-- Three -->
		
		<!-- Footer -->

			<?php include_once("mbarimiFaqes.php"); ?>

	</body>
</html>