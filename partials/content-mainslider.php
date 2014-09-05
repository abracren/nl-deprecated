<?php $countSlid=1;?>
<div id="owl" class="owl-carousel">

	 <?php $args = array( 'post_type' => 'sliders', 'posts_per_page' => 10,);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();?>
					
	<div class="slid slid-0<?php echo $countSlid?>" style="background:url(<?php the_field('slider-image') ?>);">
		<div class="container-S">
			<div class="caption-wrapper ">
				<div class="row roe">
					<div class="carousel-caption">
						<div class="medium-6 columns medium-offset-1">
							<h1 class="capTitulo"><?php the_field('caption-tittle') ?></h1>
							<p class="capParrafo"><?php the_field('caption-desc') ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<?php 
	$countSlid++;
	endwhile;?>
	
	
</div>