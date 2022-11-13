				<?php
            $result = mysqli_query($lidh, "SELECT * FROM umpn_tedhena WHERE pamja_efaqes='fillimi'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
			<section id="banner">
				<div class="inner">
					<h3><?php echo $titulli_itedhenave ?></h3>
				</div>
				
			</section>
		<?php } ?>