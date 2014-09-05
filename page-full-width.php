<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>
<div class="blogPages">

<?php get_template_part( 'partials/content', 'blogindexheader' ); ?>

<div class="fullWidth oooBack2"> 
								
</div>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

</div >			

<?php get_footer(); ?>
