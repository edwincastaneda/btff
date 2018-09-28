
    <div class="container-fluid affix cont-demo-menu">
        <div class="row">
            <div class="col-12 mt-2 mb-2">
                <h3 class="module-title">Themes Navigator</h3>
                <ul class="list-inline themes-slider">
									
									
										<?php 
		$args = array(
			'post_type' => array('themes'),
			'post_status' => array('publish'),
			'posts_per_page' => 10,
			'order' => 'DESC',
			'orderby' => 'date',
		);

$q = new WP_Query( $args );
if ( $q->have_posts() ) {
	while ( $q->have_posts() ) {
		$q->the_post();
		$title=get_the_title($q->ID);
		$link=get_the_permalink($q->ID);
		$slug = basename(get_permalink($q->ID));
		
		if ( has_post_thumbnail( $q->ID ) ) {
      $thumbnail= get_the_post_thumbnail_url( $q->ID, 'full' );
    }else{
			$thumbnail=get_bloginfo( 'template_url' )."/assets/img/thumbnail-theme.jpg";
		}
		?>
		<li class="list-inline-item item">
			<a href="#">
				<img src="<?=$thumbnail?>">
				<h3 class="title"><?=$title?></h3>
			</a>
		</li>
		<?php 
		
	}
} else {
	// no posts found
}
wp_reset_postdata();
?>
									
                </ul>
                <div class="row">
                    <div class="col">
                        <h4 class="theme-name"><?=get_the_title()?></h4>
											<span class="d-none d-sm-none d-md-inline d-lg-inline d-xl-inline theme-description"><?php the_excerpt();?></span></div>
                    <div class="col-auto">
                        <div class="theme-actions text-right">
													<a class="btn btn-link btn-sm" role="button" href="<?=site_url()?>"><i class="icon-home d-inline d-sm-inline d-md-inline d-lg-none d-xl-none"></i><span class="d-none d-sm-none d-md-none d-lg-inline d-xl-inline">Home</span></a>
													<a class="btn btn-link btn-sm" role="button" href="#"><i class="icon-share d-inline d-sm-inline d-md-inline d-lg-none d-xl-none"></i><span class="d-none d-sm-none d-md-none d-lg-inline d-xl-inline">Share</span></a>
													<a class="btn btn-link btn-sm" role="button" href="#"><i class="icon-cloud-download d-inline d-sm-inline d-md-inline d-lg-none d-xl-none"></i><span class="d-none d-sm-none d-md-none d-lg-inline d-xl-inline">Download (50K)</span></a>
											</div>
                    </div>
                </div>
            </div>
        </div>
    </div><iframe class="cont-demo" src="<?=site_url()."/app/preview/index/".$slug = basename(get_permalink());?>" width="100%" frameborder="0">Your browser do not support iframes</iframe>
