
					<?php
            $result = mysqli_query($lidh, "SELECT * FROM umpn_tedhena WHERE pamja_efaqes='MenyPrd'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  	 echo $pershkrimi_itedhenave;
			  
if($result==null)
  mysqli_free_result($result);

			}
            ?>
						
			