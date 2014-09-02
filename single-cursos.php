<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
	  <div class="backMenu" style=""></div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  <?php// get_template_part( 'partials/content', 'blogheader' ); ?>
	  <?php //get_template_part( 'partials/content', 'cursoheader' ); ?>
	  <?php get_template_part( 'partials/content', 'cursoheaderImagen' ); ?>



			<div class="fullWidth oooBack">
			

		
	  <div class="magellanContainer  oneMenu" >

	  	<ul class="small-block-grid-8  ">
	    <?php if( have_rows('seccion') ):

 	// loop through the rows of data
	    while ( have_rows('seccion') ) : the_row();

	        // display a sub field value
	        ?>
	        	<?php $link =sanitize_title(get_sub_field('titulo_menu'),true);?>
	        	<li >
	        		<a href="#<?php echo $link?> " ><?php the_sub_field('titulo_menu')?></a>
	        	</li>


	<?php
	    endwhile;

	else :

	    // no rows found

	endif;

	?>

	<ul>


</div>
</div>
</div>

			
			<div id="content">

				<div id="inner-content" class="row clearfix">
			
					<div id="main" class="large-8 medium-8 columns first clearfix equalBlog" role="main">
					
					
					    	<?php get_template_part( 'partials/content', 'curso' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
			
					</div> <!-- end #main -->
    
					<?php get_sidebar('cursos'); ?>

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>