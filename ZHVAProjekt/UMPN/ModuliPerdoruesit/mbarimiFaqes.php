<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
							<?php
		$result=mysqli_query($lidh,"SELECT * FROM umpn_tedhena WHERE pamja_efaqes='mbarimifaqes_adresatezyrave'");
		while($row=mysqli_fetch_assoc($result)){
			extract($row);
if($result==null)
		mysqli_free_result($result);
	?>
								<div class="6u">
									<h3><?php echo $titulli_itedhenave?></h3>
									<p><?php echo $pershkrimi_itedhenave	;?></p>
								</div>
								<?php } ?>
					<?php
			$result=mysqli_query($lidh,"SELECT * FROM  umpn_tedhena WHERE pamja_efaqes='mbarimifaqes_kontakteteshpejta'");
			while($row=mysqli_fetch_assoc($result)){
				extract($row);
if($result==null)
		mysqli_free_result($result);
	?>
								<div class="6u">
									<h3><?php echo $titulli_itedhenave?></h3>
									<p><?php echo $pershkrimi_itedhenave	;?></p>
								</div>
							</div>
						</div>
				<?php } ?>
						<?php
			$result=mysqli_query($lidh,"SELECT * FROM  umpn_tedhena WHERE 	pamja_efaqes='mbarimifaqes_rrethnesh'");
			while($row=mysqli_fetch_assoc($result)){
				extract($row);
if($result==null)
		mysqli_free_result($result);
	?>
						<div class="6u">
							<h3><?php echo $titulli_itedhenave?></h3>
							<p><?php echo $pershkrimi_itedhenave	;?></p>
						</div>
						<?php } ?>
					</div>
			<ul class="copyright">
			<?php
			$result=mysqli_query($lidh,"SELECT * FROM  umpn_tedhena WHERE 	pamja_efaqes='mbarimifaqes_rrsociale'");
			while($row=mysqli_fetch_assoc($result)){
				extract($row);
if($result==null)
		mysqli_free_result($result);
	?>
			<?php echo $pershkrimi_itedhenave	;?>
			<?php } ?>
		</ul>
	</div>
</footer>	