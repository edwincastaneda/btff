    <nav class="navbar navbar-light navbar-expand-md nav-principal">
        <div class="container"><a class="navbar-brand" href="#"><img src="<?= get_bloginfo( 'template_url' )?>/assets/img/logo-nav.svg" class="logo-nav"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
									<?php
									$menu_name = 'menu-1';
										if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
											$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
											$menu_items = wp_get_nav_menu_items($menu->term_id);

										foreach ( (array) $menu_items as $key => $menu_item ) {
												$title = $menu_item->title;
												$url = $menu_item->url;?>
											<li class="nav-item" role="presentation"><a class="nav-link active" href="<?=$url?>"><?=$title?></a></li>
										<?php }
										} ?>
                </ul>
        </div>
        </div>
    </nav>