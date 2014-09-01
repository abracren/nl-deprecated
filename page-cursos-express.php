<?php
/*
Template Name: Cursos Express
*/
?>
<?php $count = 0;?>
<?php get_header(); ?>
 <?php get_template_part( 'partials/content', 'expressheaderImagen' ); ?>
			
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
							      <div class="row all">


									<div class="row">
										<div class="small-12 columns wideCurse" >
												<img src="<?php the_sub_field('imagen');?>"/>


												<div class="wideCurseIn small-6 columns">
													<h1><?php the_sub_field('titulo');?></h1>
													<?php the_sub_field('descripcion');?>
													<div class="requisitos">Requisitos Mínimos para realizar el curso: <?php the_sub_field('nivel_minimo');?></div>
												</div>
										</div>
									</div>






									<div class="row">
										<div class="small-12 columns wideCurse_footer">
											<div class="small-8 columns wideCurseLeft">

												<p>Fecha: <?php the_sub_field('fecha');?></p>
												<p>Horario: <?php the_sub_field('horario');?></p>

												<p>Lugar: <?php the_sub_field('lugar');?></p>
											</div>
											<div class="small-1 columns wideCurseCenter ">
												 <img class="imageBlock" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/diagonal-ex-foot.png"></img>
												</div>
											<div class="small-3 columns wideCurseRight ">
											       <div class="precioExpress"><?php the_sub_field('precio');?><span class="euroSymbolExpress">€</span></div>
											       <a><img src="<?php echo get_template_directory_uri(); ?>/imagesRoot/paypal2.png" border="0" alt="Marcas de aceptación" /></a>


											</div>
										</div>
									</div>
								</div>
								</div>

							<!-- SECOND -->


								


								<div class="row">
									  <div class="small-12 medium-12 large-12 columns"></div>
									
										<div class="row">
										  <div class="small-12 medium-6 large-6 columns thinCurse ">
										  	<div class="expressHeaderImageSmall	">
												<img  class=""src="<?php the_sub_field('imagen');?>"/>
											</div>
												<div class="wideCurseIn small-12 columns">
													<h3><?php the_sub_field('titulo');?></h3>
													<?php the_sub_field('descripcion');?>
													<div class="requisitos">Requisitos Mínimos para realizar el curso: <?php the_sub_field('nivel_minimo');?></div>
												</div>

												<div class="small-12 columns wideCurse_footer">
													<div class="small-6 columns wideCurseLeft">

														<p>Fecha: <?php the_sub_field('fecha');?></p>
														<p>Horario: <?php the_sub_field('horario');?></p>

														<p>Lugar: <?php the_sub_field('lugar');?></p>
													</div>
													<div class="small-1 columns wideCurseCenter ">
														 <img class="imageBlock" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/diagonal-ex-foot.png"></img>
														</div>
													<div class="small-5 columns wideCurseRight ">
													       <div class="precioExpress"><?php the_sub_field('precio');?><span class="euroSymbolExpress">€</span></div>
													       <a><img src="<?php echo get_template_directory_uri(); ?>/imagesRoot/paypal2.png" border="0" alt="Marcas de aceptación" /></a>


													</div>
												</div>

										  </div>



										  <!-- SECOND COLUMNS -->
										  <div class="small-12 medium-6 large-6 columns thinCurse ">
										  	<div class="expressHeaderImageSmall	">
												<img  class=""src="<?php the_sub_field('imagen');?>"/>
											</div>
												<div class="wideCurseIn small-12 columns">
													<h3><?php the_sub_field('titulo');?></h3>
													<?php the_sub_field('descripcion');?>
													<div class="requisitos">Requisitos Mínimos para realizar el curso: <?php the_sub_field('nivel_minimo');?></div>
												</div>

												<div class="small-12 columns wideCurse_footer">
													<div class="small-6 columns wideCurseLeft">

														<p>Fecha: <?php the_sub_field('fecha');?></p>
														<p>Horario: <?php the_sub_field('horario');?></p>

														<p>Lugar: <?php the_sub_field('lugar');?></p>
													</div>
													<div class="small-1 columns wideCurseCenter ">
														 <img class="imageBlock" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/diagonal-ex-foot.png"></img>
														</div>
													<div class="small-5 columns wideCurseRight ">
													       <div class="precioExpress"><?php the_sub_field('precio');?><span class="euroSymbolExpress">€</span></div>
													       <a><img src="<?php echo get_template_directory_uri(); ?>/imagesRoot/paypal2.png" border="0" alt="Marcas de aceptación" /></a>


													</div>
												</div>

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
