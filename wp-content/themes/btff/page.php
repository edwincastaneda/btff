<?php
get_header();
get_template_part( 'template-parts/nav');


		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; 
get_template_part( 'template-parts/foot');
get_footer();
