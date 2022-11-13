<!-- Header -->

		
				<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM umpn_tedhena WHERE pamja_efaqes='titulliFaqes'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>

					
				
		
		<?php } ?>