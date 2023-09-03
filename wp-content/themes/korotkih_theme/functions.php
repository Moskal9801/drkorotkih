<?php
	add_action( 'wp_enqueue_scripts', function () {
		wp_enqueue_style( 'main-style', get_stylesheet_uri() );
		wp_enqueue_script( 'main-script', get_template_directory_uri() . '/main.js' );
	} );
	add_action( 'wp_head', function () {
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	} );
	add_filter( 'excerpt_length', function () {
		return 20;
	} );
	add_filter( 'excerpt_more', function ( $more ) {
		return '...';
	} );
	add_theme_support( 'post-thumbnails' );

    register_nav_menus(array(
        'top'    => 'Верхнее меню',
    ));

	add_action( 'admin_head', function () {
		wp_enqueue_script( 'cat-script', get_template_directory_uri() . '/cat.js' );
	} );

	add_filter( 'login_headerurl', function () {
		return 'https://01cat.ru';
	} );

	add_action( 'login_header', function () { ?>
        <style>
			#login h1 a {
				background: url("logo.png") center top no-repeat !important;
				width:      111px !important;
				height:     180px !important;
			}
        </style>
	<?php } );
	add_filter( 'admin_footer_text', function () {
		return '<b>Сделано:</b>
			<a href="https://01cat.ru/" target="_blank">Двоичный кот</a>
			<br>
			<b>Техническая поддержка:</b> тел. <a href="tel:+79145416354">+7 (914) 541-63-54</a>, email: <a href="mailto:hello@01cat.ru">hello@01cat.ru</a>';
	} );

	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page( array( 'page_title' => 'Контактные данные', 'menu_title' => 'Настройки сайта', 'menu_slug' => 'theme-general-settings', 'capability' => 'edit_posts', 'redirect' => false ) );
	}

	function is_cur_cat( $id ) {
		$i = get_the_category();
		if ( $i ) {
			$j = $i[ 0 ]->cat_ID;
			return ( $id == $j );
		}
		return false;
	}

	function is_cur( $id ) {
		$cur = get_the_ID();

		return ( $id == $cur );
	}

	function clearPhone( $phone ) {
		$to_replace = [ ' ', '-', '(', ')', '+' ];
		return str_replace( $to_replace, '', $phone );
	}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

function load_more_posts() {
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'paged' => $paged
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <a class="cards__card" href="<?php echo get_permalink(); ?>">
                <div class="card__image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="card__date">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.99663 1H15.0033C16.106 1 16.9999 1.89595 16.9999 3.00116V14.9989C16.9999 16.0538 16.1854 16.9181 15.1523 16.9945L14.9937 17L2.98705 16.9422C1.88809 16.937 1 16.0426 1 14.9411V3.00116C1 1.89595 1.89392 1 2.99663 1V1Z" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 5.00244H17" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.99246 10.0051C5.54381 10.0051 5.99077 9.55709 5.99077 9.00449C5.99077 8.45188 5.54381 8.00391 4.99246 8.00391C4.4411 8.00391 3.99414 8.45188 3.99414 9.00449C3.99414 9.55709 4.4411 10.0051 4.99246 10.0051Z" fill="#0070C0"/>
                    </svg>
                    <p><?php the_date();?></p>
                </div>
                <p class="card__name"><?php the_title(); ?></p>
                <div class="card__more"><?php the_excerpt(); ?></div>
            </a>
        <?php endwhile;
    endif;

    wp_die();
}

add_filter( 'wpcf7_validate', 'my_form_validate', 10, 2 );
function my_form_validate( $result, $tags ) {
    // Получим данные об отправляемой форме
    $form = WPCF7_Submission::get_instance();

    // Получаем данные полей
    $name = $form->get_posted_data( 'your-name' );
    $phone = $form->get_posted_data( 'your-phone' );
    $email = $form->get_posted_data( 'your-mail' );

    // Если оба поля не заполонены - выдать ошибку
    if ( empty( $name ) ) {
        $result->invalidate( 'your-name', '' );
    }

    if ( empty( $phone ) ) {
        $result->invalidate( 'your-phone', '' );
    }

    if ( empty( $email ) ) {
        $result->invalidate( 'your-mail', '' );
    }

    if (! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        $result->invalidate( 'your-mail', '' );
    }

    return $result;
}

function load_more_news() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
        'offset' => $_POST['offset'],
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <a class="cards__card" href="<?php echo get_permalink(); ?>">
                <div class="card__image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="card__date">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.99663 1H15.0033C16.106 1 16.9999 1.89595 16.9999 3.00116V14.9989C16.9999 16.0538 16.1854 16.9181 15.1523 16.9945L14.9937 17L2.98705 16.9422C1.88809 16.937 1 16.0426 1 14.9411V3.00116C1 1.89595 1.89392 1 2.99663 1V1Z" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 5.00244H17" stroke="#0070C0" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.99246 10.0051C5.54381 10.0051 5.99077 9.55709 5.99077 9.00449C5.99077 8.45188 5.54381 8.00391 4.99246 8.00391C4.4411 8.00391 3.99414 8.45188 3.99414 9.00449C3.99414 9.55709 4.4411 10.0051 4.99246 10.0051Z" fill="#0070C0"/>
                    </svg>
                    <p><?php the_date();?></p>
                </div>
                <p class="card__name"><?php the_title(); ?></p>
                <div class="card__more"><?php the_excerpt(); ?></div>
            </a>
        <?php endwhile;
    endif;
    wp_die();
}
add_action( 'wp_ajax_load_more_news', 'load_more_news' );
add_action( 'wp_ajax_nopriv_load_more_news', 'load_more_news' );

class Custom_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));

        // проверяем текущую страницу
        if (is_page($item->object_id)) {
            $class_names .= ' active';
        }

        $output .= "<li id='menu-item-$item->ID' class='$class_names'>";
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before .apply_filters('the_title', $item->title, $item->ID) .$args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

