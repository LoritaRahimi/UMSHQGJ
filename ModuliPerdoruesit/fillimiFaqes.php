<!-- Header -->
			
				<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM umshqgj_tedhenat WHERE Pamja_faqes='Fillimi_faqes'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
			
			<section id="banner">
						<div class="inner">
							<h2><?php echo $Titulli_tedhenave ?></h2>
						</div>
			</section>
					
			
		<?php } ?>