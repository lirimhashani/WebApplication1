<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
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
				    <h3>Kërko të dhënat e llojeve te projekteve për modifikim</h3>
					
					
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
					<input type="text" name="term" placeholder="Llojin e Projektit"/>
				</td>
				<td> <input type="submit" value="Kërko" /></td>
				</tr>
				</table> 
				
				</form>
				<table width='80%' border=0>
					<div class="table-wrapper">
					<tr bgcolor='#CCCCCC'>
						<td>Llojet e Projekteve</td>
						<td>Modifiko</td>
					</tr> 
				<?php
				if (!empty($_REQUEST['term'])) {
				$term = mysqli_real_escape_string
				($lidh,$_REQUEST['term']);     
				$sql = mysqli_query($lidh,
				"SELECT * FROM umpn_llojeteprojekteve 
				WHERE Llojeteprojekteve LIKE '%".$term."%'"); 
				while($rreshti = mysqli_fetch_array($sql)) { 		
						echo "<tr>";
						echo "<td>".$rreshti['Llojeteprojekteve']."</td>";
						echo "<td><a href=\"fresko_llojeteprojektit.php?ID_Llojeteprojekteve=$rreshti[ID_Llojeteprojekteve]\" class='button' class='button primary'>
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
			<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
								<div class="6u">
									<h3>Adresat e Zyrave te Kompanis</h3>
									<ul class="alt">
										<li>rr. Zija Shemsiu pn. 60000 Gjilan</li>
										<li>rr. Zija Shemsiu pn. 60000 Gjilan</li>
										<li>rr. Zija Shemsiu pn. 60000 Gjilan</li>
										
									</ul>
								</div>
								<div class="6u">
									<h3>Kontakte te shpejta</h3>
									<ul class="alt">
										<li>Numra te telefonit</li>
										<li>+38345829635</li>
										<li>+38345829635</li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="6u">
							<h2>Rreth Nesh</h2>
							<p>Blandit nunc tempor lobortis nunc non. Mi accumsan. Justo aliquet massa adipiscing cubilia eu accumsan id. Arcu accumsan faucibus vis ultricies adipiscing ornare ut. Mi accumsan justo aliquet.</p>
							<ul class="icons">
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
							</ul>
						</div>
					</div>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>