
		<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollimi.php");	
?>
<?php
//including the database connection file
include_once("konfigurimi.php");

//fetching data in descending order (lastest entry first)
$rezultati = mysqli_query($lidh,
"SELECT * FROM umpn_tedhena ORDER BY ID_tedhenat DESC");
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
				    <h3>Kërko të dhëna për modifikim</h3>
					
					
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
	<input type="text" name="term" placeholder="Titullit ose Pamjes se faqes"/>
</td>
<td> <input type="submit" value="Kërko" /></td>
</tr>
</table> 


</form> 
	<div>
<table width='80%' border=0>
	<div>
	<tr bgcolor='#CCCCCC'>
		<td>Titulli</td>
		<td>Pershkrimi</td>
		<td>Emri i Dosjes</td>
		<td>Pamja e faqes</td>
		<td>Modifiko</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($lidh,$_REQUEST['term']);     
$sql = mysqli_query($lidh,
"SELECT * FROM umpn_tedhena 
WHERE titulli_itedhenave LIKE '%".$term."%' 
OR  pamja_efaqes LIKE '%".$term."%'"); 
while($rreshti = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$rreshti['titulli_itedhenave']."</td>";
		echo "<td>".$rreshti['pershkrimi_itedhenave']."</td>";
		echo "<td>".$rreshti['dosja']."</td>";	
		echo "<td>".$rreshti['pamja_efaqes']."</td>";	
		echo "<td><a href=\"fshijteDhena.php?ID_tedhenat=$rreshti[ID_tedhenat]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenen?')\" class='button' class='button primary'>Fshijë</a></td></tr>";		
	}

}

?>
</table>
				 </div>
				 </div>
				 </div>
			</section>
			
		<!-- Two -->
		<!-- Three -->
		
<!-- Footer -->

			<?php include_once("mbarimiFaqes.php"); ?>

	</body>
</html>