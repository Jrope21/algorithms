<?php get_header(); ?>
<style>
    .navbar{
        margin: 0px 45px 0px 158px;   
    }
    .navbar-brand{
        margin-left: 28px;
    }
	.col-md-5{
		padding-right: 20px;
	}
	.homeBanner{
		margin: -10px auto auto auto;
		width: 1012px;
		height: 364px;
		background-image: url(https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_banner-v2.jpg);
	}	


@media (min-width: 1012px) {
	.container {
		width: 1009px;
	}
	.homeBanner{
		width: 980px;
		height:352px;
		background-size: 980px 352px;
	}
	.wellwrap{
		margin-right: 12px;
	}
	.wellwrap-container{
		width: 994px;
	}
	.wellwrap-wide {
		margin-left: 8px;
	}
			
}
@media (max-width: 1012px) {
	.homeBanner{
		width: 745px;
		height:269px;
		background-size: 744px 268px;
	}
	td.homeBannerCarousel{
		display:none;
	}

	.wellwrap{
		margin-right: 0px;		
	}

	.wellwrap-wide{
		margin-left: 0px;
		margin-right: 45px;		
	}


	.wellwrapNews{
		margin-right: 0px;
		width: 740px;
		margin-top: 15px;
	}
	.footer-wrap {
		width: 755px;
	}
	.foottext {
		width: 200px;
	}			
	.wellwrap-container{
		width: 740px;
	}	

}
	@media (max-width: 767px) {
    .navbar {
        margin: 0px 0px 0px 0px;
        border-radius: 0px;
        min-height: 45px;
        width:100%;
        position: absolute;
        top: 57px;
        z-index: 98;
    }
    .navbar-brand {
        top: 0px;
        padding:0px;
        margin-left: 0px;
        background: white;
        height: 104px;
        width: 97px;
    }
	.wellwrap-container{
		width: 100%;
	}	    
	.wellwrap-wide{
		margin-left: 0px;
		margin-right: 0px;		
	}

	.wellwrapNews{
		margin-top: 15px;
		margin-left: 0px;
		width:95%;
	}
	.footer-wrap{
		width:100%;
	}		    
}    	

</style>
<div class="container">
	<div class="row">
	<div class="hidden-xs homeBanner">
		<table style="width: 1012px; height: 364px;" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<td valign="top" width="720"><a href="/services"><img alt="" src="https://www.stallionoilfield.com/wp-content/themes/stallion/images/clear.gif" width="700" height="346" border="0"></a></td>
					<td width="275" class="homeBannerCarousel">
						<div id="wrap">
							<div id="mycarousel" class="jcarousel jcarousel-skin-tango">
							<ul style="list-style: none; display: block;">
								<li><a onmouseover="MM_swapImage('accommodations','','https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_accommodations_btn_on.png',1)" onmouseout="MM_swapImgRestore()" href="/services/drilling-support/accommodations"><img id="accommodations" alt="Workforce Accommodations" src="https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_accommodations_btn.png" width="202" height="75" name="accommodations" border="0"></a></li>
								<li><a onmouseover="MM_swapImage('starcomm','','https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_starcomm_btn_on.png',1)" onmouseout="MM_swapImgRestore()" href="/services/starcomm"><img id="starcomm" alt="Remote Communications" src="https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_starcomm_btn.png" width="202" height="75" name="starcomm" border="0"></a></li>
								<li><a onmouseover="MM_swapImage('construction','','https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_construction_btn_on.png',1)" onmouseout="MM_swapImgRestore()" href="/services/wellsite-construction"><img id="construction" alt="Wellsite Construction" src="https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_construction_btn.png" width="202" height="75" name="construction" border="0"></a></li>
								<li><a onmouseover="MM_swapImage('rental','','https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_rental_btn_on.png',1)" onmouseout="MM_swapImgRestore()" href="/services/drilling-support/rental-equipment"><img id="rental" alt="Rental Equipment" src="https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_rental_btn.png" width="202" height="75" name="rental" border="0"></a></li>
								<li><a onmouseover="MM_swapImage('fluid','','https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_fluid_btn_on.png',1)" onmouseout="MM_swapImgRestore()" href="/services/completion-production/fluid-services"><img id="fluid" alt="Fluid Services" src="https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_fluid_btn.png" width="202" height="75" name="fluid" border="0"></a></li>
								<li><a onmouseover="MM_swapImage('solids','','https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_solids_btn_on.png',1)" onmouseout="MM_swapImgRestore()" href="/services/drilling-support/solids-control"><img id="solids" alt="Solids Control" src="https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_solids_btn.png" width="202" height="75" name="solids" border="0"></a></li>
								<li><a onmouseover="MM_swapImage('complexes','','https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_camp_btn_on.png',1)" onmouseout="MM_swapImgRestore()" href="/services/camp-complexes"><img id="complexes" alt="Camp Complexes" src="https://www.stallionoilfield.com/wp-content/themes/stallion/images/home_camp_btn.png" width="202" height="75" name="complexes" border="0"></a></li>
							</ul>
							</div>

						</div>
					</td>
				</tr>
			</tbody>
		</table>
</div>

			<div class="mobileCarousel-img-container visible-xs" style="margin: 45px auto auto auto;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/mobile-banner.png" width="100%" alt="" >				
			</div>

			<ul class="mobileCarousel-link-container list-unstyled visible-xs">
				<li>
					<div class="mobileCarousel-link-wrapper">
						<a class="mobileCarousel-link-title" href="/services/drilling-support/accommodations"><h4>Workforce Accommodations</h4></a> 
					</div>
                </li>
				<li>
					<div class="mobileCarousel-link-wrapper">
						<a class="mobileCarousel-link-title" href="/services/starcomm"><h4>Remote Communications</h4></a> 
					</div>
                </li>                
				<li>
					<div class="mobileCarousel-link-wrapper">
						<a class="mobileCarousel-link-title" href="/services/wellsite-construction"><h4>Wellsite Construction</h4></a> 
					</div>
                </li>
				<li>
					<div class="mobileCarousel-link-wrapper">
						<a class="mobileCarousel-link-title" href="/services/drilling-support/rental-equipment"><h4>Rental Equipment</h4></a> 
					</div>
                </li>
				<li>
					<div class="mobileCarousel-link-wrapper">
						<a class="mobileCarousel-link-title" href="/services/completion-production/fluid-services"><h4>Fluid Services</h4></a> 
					</div>
                </li>                
				<li>
					<div class="mobileCarousel-link-wrapper">
						<a class="mobileCarousel-link-title" href="/services/drilling-support/solids-control"><h4>Solids Control</h4></a> 
					</div>
                </li>
				<li>
					<div class="mobileCarousel-link-wrapper">
						<a class="mobileCarousel-link-title" href="/services/camp-complexes"><h4>Camp Complexes</h4></a> 
					</div>
                </li>                                   
			</ul>




			<div class="wellwrap-container">
				<div class="wellwrap wellwrap-wide">
					<div class="wellcont-title">Featured Service</div>
					<div class="wellcont-cont">
						<a href="<?php echo the_field('featured_service_link') ?>"><img alt="" src="<?php echo the_field('featured_service_image') ?>" /></a>
					</div>
				</div>
				<div class="wellwrap">
					<div class="wellcont-title">Geography</div>
					<a href="/locations/">
						<div class="wellcont-img-cont wellcont-img-cont-geography">
						    <div class="sidebar-image-txt">
						        <p class="title title-blue">Service Areas</p>
						        <p class="title-sub">Get Stallion service nationwide.</p>
						    </div>
						</div>
						<div class="bttn-news">
							<a href="/service-areas/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/bttn-locations.png" alt="">
							</a>
						</div>						
					</a>

				</div>
				<div class="wellwrap wellwrapNews" style="margin-right:0px;">
					<div class="wellcont-title">News &amp; Events</div>
					<div class="wellcont-cont wellcont-news">

<?php

# Cached Wordpress queries
# SE Disq : http://wordpress.stackexchange.com/questions/70424/posts-per-page-doesnt-work/70425

    $Poz = array(
    'posts_per_page' => 3, 
    'orderby' => 'date', 
    'order' => 'DEC', 
    'no_found_rows' => true,
    'update_post_term_cache' => false, 
    'update_post_meta_cache' => false,
    'category_name' => 'events' 
    );

    query_posts( $Poz );?>





			          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			            <div class="ditto_summaryPost" style="margin-bottom:5px;">
			              
			              <strong><?php the_title(); ?></strong><br>
			              <a href="<?php the_permalink(); ?>">read more...</a><br><br>
			            </div>





			          <?php endwhile; else: ?>
			            <p><?php _e('Sorry, there are no posts.'); ?></p>
			          <?php endif; ?> 
<div class="bttn-news">
	<a href="/about-stallion/news-and-events/">
		<img src="<?php echo get_template_directory_uri(); ?>/images/bttn-news.png" alt="">
	</a>
</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>


    <div id="splash-container">
    <img src="https://www.stallionoilfield.com/wp-content/uploads/2019/12/Stallion_Splash_FINAL.jpg" alt="Splash image for Stallion's new website launch">
</div>

<style>
    #splash-container {
        z-index: 101;
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.4);
        cursor: pointer;
    }

    #splash-container img {
        width: 85%;
        max-width: 800px;
    }
</style>
<script>
    let splashContainer = document.getElementById('splash-container');

    splashContainer.addEventListener("click", function(){
        splashContainer.style.display = "none";
    })
</script>


	<?php get_footer(); ?>
