<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="fullWidth dddBack hide-for-small">			
<?php get_template_part( 'partials/content', 'mainslider' ); ?>
</div>

<div class="fullWidth aaaBack"> 
    <div class="row">
        <div class="medium-12 columns">
            <ul class=" small-block-grid-1 medium-block-grid-5 underSlide">
                <li>
                    <a class="linkBlock" href="#">
                        <div class="block">
                            <img class="imageBlock" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/th.jpg"></img>
                            <h3 class="textBlock">VER TODOS LOS CURSOS</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="linkBlock" href="#">
                        <div class="block">
                            <img class="imageBlock" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/th.jpg"></img>
                            <h3 class="textBlock">VER TODOS LOS CURSOS</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="linkBlock" href="#">
                        <div class="block">
                            <img class="imageBlock" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/th.jpg"></img>
                            <h3 class="textBlock">VER TODOS LOS CURSOS</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="linkBlock" href="#">
                        <div class="block">
                            <img class="imageBlock" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/th.jpg"></img>
                            <h3 class="textBlock">VER TODOS LOS CURSOS</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="linkBlock" href="#">
                        <div class="block">
                            <img class="imageBlock" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/th.jpg"></img>
                            <h3 class="textBlock">VER TODOS LOS CURSOS</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="fullWidth grayBack">
	<div class="row headerConnect">
		<div class="medium-12 columns ">
			<div class="medium-4 columns">
				    <h2 class="section-title">VIVE LA EXPERIENCIA</h2> 
			</div>
			<div class="medium-8 columns descConnect">
				    <p class="cert-cta"><span class="cert-cta-text"><b>23 Milliones</b> de ceritificaciones y creciendo</span>  
				    <a class="button " href="#" target="_blank">APRENDA COMO OBTENER LA VERIFICACIÒN</a> 
				    </p>
			</div>
		</div>
	</div>


	<div class="row">
	    <div class="medium-6 columns small-12 bigger">
	        <a class="connect-btn connect-horiz-image" href="#" target="_blank">
	            <div class="connect-btn-hover text-center">
	                <p>Over <b>100,000</b> divers and growing. Join today.</p>
	                <p>
	                    <button class="button btn-lg " >Entrar</button>
	                </p>
	            </div>
	            <img src="<?php echo get_template_directory_uri(); ?>/imagesRoot/placeBig.jpg">
	        </a>
	    </div>
	    <div class=" medium-3 columns small-6">
	        <a class="connect-btn" href="https://www.facebook.com/" target="_blank">
	            <div class="connect-btn-hover text-center">
	                <p>Over <b>1 Million</b> Facebook followers and counting.</p>
	                <p>
	                    <button class="button btn-lg btn-primary" >Registrate</button>
	                </p>
	            </div>
	            <img class="connect-bg-img" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/placeSmall.jpg">
	        </a>
	    </div>
	    <div class="medium-3 columns small-6">
		        <a class="connect-btn" href="" target="_blank">
		            <div class="connect-btn-hover connect-news" style="padding-top:20px;">
		                <h5 class="connect-news-date">24 August, 2014</h5> 
		                <hr class="connect-news-rule">
		                <h3 class="connect-news-title">Top ScubaEarth Dive Sites – Bali, Indonesia</h3> 
		            </div>
		            <img class="connect-bg-img" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/placeSmall.jpg">
		        </a>
	    </div>
	</div>

	<div class="row">
	    <div class="medium-3 columns small-6">
	        <a class="connect-btn" href="http://www.youtube.com/embed/pq5v0HZ6CeU?list=PLBE1A99745B778B9E" target="_blank">
	            <img class="yt-video-play-btn" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/yt-video-play-btn.png">
	            <img class="connect-bg-img hoverZoomLink" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/placeSmall.jpg">
	        </a>
	    </div>
	    <div class="medium-3 columns small-6">
	        <a class="connect-btn" href="http://www.projectaware.org/update/noaa-economic-study-shows-marine-debris-costs-california-residents-millions-dollars" target="_blank">
	            <div class="connect-btn-hover connect-news">
	                <h5 class="connect-news-date">18 August, 2014</h5> 
	                <hr class="connect-news-rule">
	                <h3 class="connect-news-title">NOAA Economic Study Shows Marine Debris Costs California Residents Millions of Dollars</h3> 
	            </div>
	            <img class="connect-bg-img" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/placeSmall.jpg">
	        </a>
	    </div>
	    <div class=" visible-sm"></div>
	    <div class="medium-6 columns small-12 bigger ">
	        <a class="connect-btn connect-horiz-image" href="http://www.youtube.com/embed/ut1U4pdxySY?list=PL9CB5702E3E3901E0" target="_blank">
	            <img class="yt-video-play-btn" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/yt-video-play-btn.png">
	            <img class="connect-bg-img" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/placeBig.jpg">
	        </a>
	    </div>
	</div>
</div>	<!--End GRAY-->

<?php get_footer(); ?>

<script  >
	


	$(document).ready(function() {
		var owl = $("#owl");
 
  owl.owlCarousel({
    navigation : false,
    singleItem : true,
    transitionStyle : "fade"
  });
 
 

});
</script>
