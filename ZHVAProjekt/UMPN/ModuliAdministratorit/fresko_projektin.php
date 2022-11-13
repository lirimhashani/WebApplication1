<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollimi.php");	
?>

<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['fresko_projektin']))
{	
	$ID_Projekti = $_POST['ID_Projekti'];
	$Emri=$_POST['Emri'];
	$Adresa=$_POST['Adresa'];
	$Pershkrimi=$_POST['Pershkrimi'];		
	$ID_Llojeteprojekteve=$_POST['ID_Llojeteprojekteve'];	
	
	$fotoData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$emrifotos = $_FILES['userfile']['name'];
	$maxsize = 10000000; //set to approx 10 MB
	
	// checking empty fields
	if(empty($Emri) || empty($Adresa) || empty($Pershkrimi) || empty($ID_Llojeteprojekteve)) {	
			
		if(empty($Emri)) {
			echo "<font color='red'>Fusha 'Emri' eshte e zbrazet!</font><br/>";
		}
		
		if(empty($Adresa)) {
			echo "<font color='red'>Fusha 'Adresa' eshte e zbrazet</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Fusha 'Pershkrimi' eshte e zbrazet</font><br/>";
		}
		if(empty($ID_Llojeteprojekteve)) {
			echo "<font color='red'>Fusha 'Llojet e Projekteve' eshte e zbrazet</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidh,"UPDATE umpn_projekti SET Emri='$Emri',Adresa='$Adresa', Pershkrimi='$Pershkrimi', ID_Llojeteprojekteve='$ID_Llojeteprojekteve', foto='$fotoData', emrifotos='$emrifotos' WHERE ID_Projekti=$ID_Projekti");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: modifiko_projekt.php");
	}
}
?>
<?php
//getting ID_Projekti from url
$ID_Projekti = $_GET['ID_Projekti'];

//selecting data associated with this particular ID_Projekti
$rezultati = mysqli_query($lidh,"SELECT * FROM umpn_projekti WHERE ID_Projekti=$ID_Projekti");

while($rez = mysqli_fetch_array($rezultati))
{
	$Emri = $rez['Emri'];
	$Adresa = $rez['Adresa'];
	$Pershkrimi=$rez['Pershkrimi'];	
	$ID_Llojeteprojekteve = $rez['ID_Llojeteprojekteve'];
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
				<form enctype="multipart/form-data"  name="form1" method="post" action="fresko_projektin.php">
				<table border="0">
				<tr>
				<select name="ID_Llojeteprojekteve">
				<option selected="selected" required>Zgjedh Llojin e Projektit</option>
					<?php
					$rez=mysqli_query($lidh,"SELECT * FROM umpn_llojeteprojekteve");
					while($rreshti=$rez->fetch_array())
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
				<td><input type="text" name="Emri" value='<?php echo $Emri;?>' required /></td>
			</tr>
			<tr> 
				<td>Adresa</td>
				<td><input type="text" name="Adresa" value='<?php echo $Adresa;?>' required /></td>
			</tr>
			<tr> 
				<td>Pershkrimi</td>
				<td><textarea rows="10" cols="30" name="Pershkrimi"  required ><?php echo $Pershkrimi;?></textarea></td>
			</tr>			
			<tr>
			<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
			<td><input name="userfile" type="file" /></td>
			</tr>
			
			
			<tr>
				<td><input type="hidden" name="ID_Projekti" value='<?php echo $_GET['ID_Projekti'];?>' /></td>
				<td><input type="submit" name="fresko_projektin" value="Modifiko"></td>
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