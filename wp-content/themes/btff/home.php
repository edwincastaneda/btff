<?php 
get_header();
get_template_part( 'template-parts/nav');
?>


<div class="jumbotron" style="background-image: url(<?= get_bloginfo( 'template_url' )?>/assets/img/background.png?h=1edcf9b…);">
	<div class="container text-center">
		<h1 class="titulo">100% free themes</h1>
		<p class="subtitulo m-0">Bootstrap V4 CSS Themes</p>
		<p class="subtitulo">Look our great modern and elegant theme for your startup or proyect, try it! it's FREE</p>
		<p><a class="btn btn-link m-3" role="button" href="#">Read our terms</a></p>
	</div>
</div>
<div class="container">
	<div class="row">
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
		<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
			<div class="card card-theme">
				<div class="card-body p-0"><img class="img-fluid imagen" src="<?=$thumbnail?>">
					<div class="cont-card-theme">
						<h4 class="m-0"><?=$title?></h4>
						<p class="excerpt m-0"><?php the_excerpt();?></p>
						<h6 class="text-muted descargas mt-2 mb-2 text-right">32 downloads</h6><a href="<?=$link?>" class="btn btn-block">Preview &amp; Download</a></div>
				</div>
			</div>
		</div>
		<?php 
		
	}
} else {
	// no posts found
}
wp_reset_postdata();
?>

	</div>
</div>
<?php 
get_template_part( 'template-parts/foot');
get_footer();
?>