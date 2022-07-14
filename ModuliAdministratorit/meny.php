

					<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM umshqgj_tedhenat WHERE Pamja_faqes='Meny_Administratorit'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  	 echo $Pershkrimi_tedhenave;
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

			}
            ?>
						
			