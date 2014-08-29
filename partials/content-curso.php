
						
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	
	<?php for($i=1;$i<6;$i++){?>

	<?php $link =sanitize_title(get_field('titulo_menu_'.$i));?>
	<a name="<?php echo $link.$i?>"></a>
	<h1 data-magellan-destination="<?php echo $link.$i?>"><?php the_field('titulo-'.$i);?></h1>
	<?php the_field('contenido-'.$i);?>
	<?php the_field('contenido-'.$i);?>


	<?php } ?>


	




	


	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	
		



	
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->
						    
	<?php //comments_template(); ?>
					
</article> <!-- end article -->
