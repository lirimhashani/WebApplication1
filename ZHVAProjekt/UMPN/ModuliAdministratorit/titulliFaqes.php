				<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM umpn_tedhena WHERE pamja_efaqes='fillimi'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysql_free_result($rezultati);

            ?>
			<section id="banner">
				<div class="inner">
					<h3><?php echo $titulli_itedhenave ?></h3>
				</div>
				
			</section>
		<?php } ?>