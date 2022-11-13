
					<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM umpn_tedhena WHERE pamja_efaqes='MenyAdmin'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  	 echo $pershkrimi_itedhenave;
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

			}
            ?>
						
			