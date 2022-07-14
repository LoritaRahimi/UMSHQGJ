<footer id="footer">

				<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM umshqgj_tedhenat WHERE Pamja_faqes='FundiFaqes_RrjeteSociale'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						
							
							<?php echo $Pershkrimi_tedhenave; ?>
						
			<?php } ?>
					
												<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM umshqgj_tedhenat WHERE Pamja_faqes='FundiFaqes_CopyRight'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
					
					
							<?php echo $Pershkrimi_tedhenave; ?>
					
			<?php } ?>
			
			
						
			</footer>