<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php include_once("konfigurimi.php"); ?>

<html>
	<head>
		<title>Moduli Perdoruesit</title>
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

		<!-- Header-->
		
			<?php include_once("meny.php"); ?>
			

		<!-- Banner -->
		
			<?php include_once("titulliFaqes.php"); ?>
			

		<!-- One -->

			
		<!-- Two -->
			<section id="two" class="wrapper style2">
				<header class="major">
					<h2>LE TË NDËRTOJMË SË BASHKU NJË TË ARDHME MË TË MIRË</h2>
				</header>
				<div class="container">
					<div class="row">
					<?php
					$result = mysqli_query($lidh, "SELECT  ll.Llojeteprojekteve, u.Emri, u.Pershkrimi, u.Adresa, u.foto, u.emrifotos FROM umpn_projekti u
					LEFT OUTER JOIN umpn_llojeteprojekteve ll ON u.ID_Llojeteprojekteve = ll.ID_Llojeteprojekteve
					GROUP BY ll.Llojeteprojekteve, u.Emri, u.Pershkrimi, u.Adresa, u.foto, u.emrifotos
					ORDER BY ll.ID_Llojeteprojekteve, u.ID_Projekti DESC");
					while ($row = mysqli_fetch_assoc($result)) {

					extract($row);
								  
								  
					if($result==null)
					  mysqli_free_result($result);

								?>
				
				
					
						<div class="6u">
							<section class="special">
								<div class="imagefit">
								<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['foto'] ).'" width="100%" height="100%">'; ?>
								</div>
								
								<h2><?php echo $Emri ; ?></h2>
								<h4><?php echo $Llojeteprojekteve; ?></h4>
								<p>Adresa: <i><?php echo $Adresa ; ?></i><br>
								<?php echo $Pershkrimi; ?></p>
							</section>
							
						</div>
						<?php } ?>
					
				</div>
				
				
			</div>
			</section>
			

		<!-- Three -->
			
			
		<!-- Footer -->
		<?php include_once("mbarimiFaqes.php"); ?>

	</body>
</html>