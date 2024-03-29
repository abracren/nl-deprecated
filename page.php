<?php get_header(); ?>
<div class="blogPages">

<?php get_template_part( 'partials/content', 'blogindexheader' ); ?>

<div class="fullWidth oooBack2"> 
								
</div>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-8 medium-8 columns" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

</div>
<?php get_footer(); ?>