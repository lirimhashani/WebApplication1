<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollimi.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['freskotedhena']))
{	
	$ID_tedhenat=$_POST['ID_tedhenat'];
	
	$titulli_itedhenave=$_POST['titulli_itedhenave'];
	$pershkrimi_itedhenave=$_POST['pershkrimi_itedhenave'];
	$dosja=$_POST['dosja'];	
		$pamja_efaqes=$_POST['pamja_efaqes'];	
	// checking empty fields
	if(empty($titulli_itedhenave) || empty($pershkrimi_itedhenave) || empty($dosja) || empty($pamja_efaqes)){	
			
		if(empty($titulli_itedhenave)) {
			echo "<font color='red'>Fusha 'Titulli' eshte e zbrazet!</font><br/>";
		}
		
		if(empty($pershkrimi_itedhenave)) {
			echo "<font color='red'>Fusha 'Pershkrimi' eshte e zbrazet!</font><br/>";
		}
		
		if(empty($dosja)) {
			echo "<font color='red'>Fusha 'Dosja' eshte e zbrazet!</font><br/>";
		}	
	if(empty($pamja_efaqes)) {
			echo "<font color='red'>Fusha 'Pamja e Faqes' eshte e zbrazet!</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidh,"UPDATE umpn_tedhena SET titulli_itedhenave='$titulli_itedhenave',pershkrimi_itedhenave='$pershkrimi_itedhenave',dosja='images/$dosja',pamja_efaqes='$pamja_efaqes' WHERE ID_tedhenat=$ID_tedhenat");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: modifiko_tedhena.php");
	}
}
?>
<?php
//getting ID_Dep from url
$ID_tedhenat=$_GET['ID_tedhenat'];

//selecting data associated with this particular ID_Dep
$rezultati = mysqli_query($lidh,"SELECT * FROM umpn_tedhena WHERE ID_tedhenat=$ID_tedhenat");

while($rez = mysqli_fetch_array($rezultati))
{
	$titulli_itedhenave = $rez['titulli_itedhenave'];
	$pershkrimi_itedhenave = $rez['pershkrimi_itedhenave'];
	$dosja = $rez['dosja'];
		$pamja_efaqes = $rez['pamja_efaqes'];
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

		<!-- Header-->
		
			<header id="header" class="skel-layers-fixed">
				
				<nav id="nav">
					<ul>
						<li><a href="ballina.php">Ballina</a></li>
						<li><a href="perdoruesit.php">Perdoruesit</a></li>
						<li><a href="kontakti.php">Kontaktet e Pranuara ne Kompanin e Ndertimit</a></li>
						<li><a href="ckycu.php">Ckycu</a></li>
					</ul>
				</nav>
			</header>
			

		<!-- Banner -->
		
				<section id="banner">
				<div class="inner">
					<h3>Uebaplikacioni per menaxhimin e Projekteve Ndertuese (UMPN)</h3>
				</div>
			</section>
			

		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
				<p style="text-align:center;">Përshëndetje, <em><?php  echo $kyq_perdorues;?>!</em></p>
					<h3>Modifiko të dhënat</h3>
				</header>
					<div class="container">
				<div class="6u">


				<form form="form1" method="post" action="fresko_tedhena.php">
	
	

			
				Titulli
				<input type="text" name="titulli_itedhenave" value='<?php echo $titulli_itedhenave;?>'   required />
				<br>
				Pershkrimi
				<!--<input type="text" name="PershkrimiD" value='<?php /*echo $PershkrimiD;*/?>'   required />-->
								<textarea name="pershkrimi_itedhenave"  rows="10" cols="30"><?php echo $pershkrimi_itedhenave;?></textarea>
				<br>
				Emri i file-it
				<input type="text" name="dosja" value='<?php echo $dosja;?>'   required />
				<br >
				Pamja e faqes
				<input type="text" name="pamja_efaqes" value='<?php echo $pamja_efaqes;?>'   required />
				<br >
				<input type="hidden" name="ID_tedhenat" value='<?php echo $_GET['ID_tedhenat'];?>' />
				<input type="submit" name="freskotedhena" value="Modifiko">
		
		
				</form>

					</div>
				    </div>
				
			</section>
			
		<!-- Two -->
		<!-- Three -->
		
<!-- Footer -->

			<?php include_once("mbarimiFaqes.php"); ?>

</html>