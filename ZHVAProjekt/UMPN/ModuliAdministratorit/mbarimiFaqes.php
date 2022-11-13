<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
							<?php
		$rezultati=mysqli_query($lidh,"SELECT * FROM umpn_tedhena WHERE pamja_efaqes='mbarimifaqes_adresatezyrave'");
		while($rreshti=mysqli_fetch_assoc($rezultati)){
			extract($rreshti);
if($rezultati==null)
		mysqli_free_result($rezultati);
	?>
								<div class="6u">
									<h3><?php echo $titulli_itedhenave?></h3>
									<p><?php echo $pershkrimi_itedhenave	;?></p>
								</div>
								<?php } ?>
					<?php
			$rezultati=mysqli_query($lidh,"SELECT * FROM  umpn_tedhena WHERE pamja_efaqes='mbarimifaqes_kontakteteshpejta'");
			while($rreshti=mysqli_fetch_assoc($rezultati)){
				extract($rreshti);
if($rezultati==null)
		mysqli_free_result($rezultati);
	?>
								<div class="6u">
									<h3><?php echo $titulli_itedhenave?></h3>
									<p><?php echo $pershkrimi_itedhenave	;?></p>
								</div>
							</div>
						</div>
				<?php } ?>
						<?php
			$rezultati=mysqli_query($lidh,"SELECT * FROM  umpn_tedhena WHERE 	pamja_efaqes='mbarimifaqes_rrethnesh'");
			while($rreshti=mysqli_fetch_assoc($rezultati)){
				extract($rreshti);
if($rezultati==null)
		mysqli_free_result($rezultati);
	?>
						<div class="6u">
							<h3><?php echo $titulli_itedhenave?></h3>
							<p><?php echo $pershkrimi_itedhenave	;?></p>
						</div>
						<?php } ?>
					</div>
			<ul class="copyright">
			<?php
			$rezultati=mysqli_query($lidh,"SELECT * FROM  umpn_tedhena WHERE 	pamja_efaqes='mbarimifaqes_rrsociale'");
			while($rreshti=mysqli_fetch_assoc($rezultati)){
				extract($rreshti);
if($rezultati==null)
		mysqli_free_result($rezultati);
	?>
			<?php echo $pershkrimi_itedhenave	;?>
			<?php } ?>
		</ul>
	</div>
</footer>	