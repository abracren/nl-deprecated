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
	  <div class="backMenu" style="background-color:#333;width:100%;min-height:86px;position:fixed;top:0;display:none;"></div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  <?php get_template_part( 'partials/content', 'blogheader' ); ?>


			<div class="fullWidth oooBack">
				<div class="row">

		
	  <div class="magellanContainer" style=""data-magellan-expedition="fixed">
	  <dl class="sub-nav">
	   

	<?php for($i=1;$i<6;$i++){?>
	<?php $link =sanitize_title(get_field('titulo_menu_'.$i));?>

	<dd data-magellan-arrival="<?php echo $link.$i?>" class="ddMagellan"><a href="#<?php echo $link.$i;?>" ><span class="menuMagellan"><?php the_field('titulo_menu_'.$i);?></span></a></dd>
	<?php } ?>
	  </dl>
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