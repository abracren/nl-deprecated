<?php
/*
Template Name: Cursos Express
*/
?>
<?php $count = 0;?>
<?php get_header(); ?>
 <?php get_template_part( 'partials/content', 'cursoheaderImagen' ); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    	  <?php if( have_rows('curso') ):

						 	// loop through the rows of data
							    while ( have_rows('curso') ) : the_row();

							        // display a sub field value
							        ?>
							<div class="row">
								<div class="small-12 columns wideCurse" >
										<img src="<?php the_sub_field('imagen');?>"/>


										<div class="wideCurseIn small-6 columns">
											<h1><?php the_sub_field('titulo');?></h1>
											<?php the_sub_field('descripcion');?>
											<?php the_sub_field('nivel_minimo');?>
										</div>
								</div>
							</div>

							<div class="row">
								<div class="small-12 columns wideCurse_footer">
									<div class="small-7 columns wideCurseLeft">

										 <?php the_sub_field('fecha');?>
							        <?php the_sub_field('lugar');?>
							        <?php the_sub_field('horario');?>
									</div>
									<div class="small-5 columns wideCurseRight ">
									       <?php the_sub_field('precio');?>

									</div>
								</div>
							</div>
							       
							       
							        
							        

								
								<?php $count++;?> 


								<?php
								    endwhile;

								else :

								    // no rows found

								endif;

								?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
	
				    </div> <!-- end #main -->
    
				

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
