<?php

function custom_css()
{
	// Подключение CSS файла
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri() . '/plugins/css/owl.carousel.min.css');
	wp_enqueue_style('owl-theme', get_stylesheet_directory_uri() . '/plugins/css/owl.theme.default.min.css');
	wp_enqueue_style('easy-responsive-tabs', get_stylesheet_directory_uri() . '/plugins/css/easy-responsive-tabs.css');
	wp_enqueue_style('bootstrap-select', get_stylesheet_directory_uri() . '/plugins/css/bootstrap-select.min.css');
	wp_enqueue_style('build', get_stylesheet_directory_uri() . '/plugins/css/build.css');
	wp_enqueue_style('bxslider', get_stylesheet_directory_uri() . '/plugins/css/jquery.bxslider.css');
	wp_enqueue_style('lightbox', get_stylesheet_directory_uri() . '/plugins/lightbox/css/lightbox.css');
	wp_enqueue_style('typography', get_stylesheet_directory_uri() . '/css/typography.css');
	wp_enqueue_style('base', get_stylesheet_directory_uri() . '/css/base.css');
	wp_enqueue_style('header', get_stylesheet_directory_uri() . '/css/header.css');
	wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/css/footer.css');
	wp_enqueue_style('modals', get_stylesheet_directory_uri() . '/css/modals.css');
	wp_enqueue_style('pages', get_stylesheet_directory_uri() . '/css/pages.css');
	wp_enqueue_style('catalog-pages', get_stylesheet_directory_uri() . '/css/catalog-pages.css');
	wp_enqueue_style('media-css', get_stylesheet_directory_uri() . '/css/media.css');
	wp_enqueue_style('media-catalog', get_stylesheet_directory_uri() . '/css/media-catalog.css');
}
add_action('wp_enqueue_scripts', 'custom_css');

function custom_js()
{
	// Подключение JS файла с зависимостью от jQuery
	wp_enqueue_script('jquery-js', get_stylesheet_directory_uri() . '/js/jquery-2.0.0.min.js', array(), false, false);
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), false, false);
	wp_enqueue_script('placeholder', get_stylesheet_directory_uri() . '/plugins/js/jquery.placeholder.js', array(), false, false);
	wp_enqueue_script('owl-carousel', get_stylesheet_directory_uri() . '/plugins/js/owl.carousel.js', array(), false,
			false);
	wp_enqueue_script('easy-responsive', get_stylesheet_directory_uri() . '/plugins/js/easyResponsiveTabs.js', array(), false, false);
	wp_enqueue_script('textarea', get_stylesheet_directory_uri() . '/plugins/js/jquery.textareaAutoResize.js', array(), false, false);
	wp_enqueue_script('responsive-paginate', get_stylesheet_directory_uri() . '/plugins/js/responsive-paginate.js', array(), false, false);
	wp_enqueue_script('bootstrap-select', get_stylesheet_directory_uri() . '/plugins/js/bootstrap-select.min.js', array(), false, false);
	wp_enqueue_script('parsley', get_stylesheet_directory_uri() . '/plugins/js/parsley.js', array(), false, false);
	wp_enqueue_script('stickytable', get_stylesheet_directory_uri() . '/plugins/js/jquery.stickytableheaders.min.js', array(), false, false);
	wp_enqueue_script('ru', get_stylesheet_directory_uri() . '/plugins/js/ru.js', array(), false, false);
	wp_enqueue_script('bxslider', get_stylesheet_directory_uri() . '/plugins/js/jquery.bxslider.min.js', array(), false, false);
	wp_enqueue_script('lightbox', get_stylesheet_directory_uri() . '/plugins/lightbox/js/lightbox.js', array(), false, false);
	wp_enqueue_script('lightbox', get_stylesheet_directory_uri() . '/plugins/js/video.js', array(), false, false);
	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/main.js', array(), false, false);
}
add_action('wp_enqueue_scripts', 'custom_js');


// Меню
if(function_exists('register_nav_menus')){
	register_nav_menus(
			array( // создаём любое количество областей
					'main_menu' => 'Главное меню', // 'имя' => 'описание'
					'foot_menu' => 'Меню в футере'
			)
	);
}

class mainMenuWalker extends Walker_Nav_Menu
{
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
	{
		$id_field = $this->db_fields['id'];
		if ( is_object( $args[0] ) ) {
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
		}
		return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}
	//всем внутренним ul
	function start_lvl(&$output, $depth) {
		$indent = str_repeat("\t", $depth);
		$output .= '<ul class="header__submenu-list dropdown-menu">';
	}

	function start_el(&$output, $item, $depth, $args) {
		// назначаем классы li-элементу и выводим его
		$class_names = join( ' ', $item->classes );
		//всем li первого уровня
		if ($depth == 0) {
			$class_names .= ' header__menu-item';
		}
		//всем li, у которых есть дочерние элементы
		if ($args->has_children) {
			$class_names .= ' dropdown';
		}
		$class_names = ' class="' .esc_attr( $class_names ). '"';

		$output.= '<li id="menu-item-' . $item->ID . '"' .$class_names. '>';


		// назначаем атрибуты a-элементу
		$attributes = !empty( $item->url ) ? ' href="' .esc_attr($item->url). '"' : '';
		$item_output = $args->before;
		//всем ссылкам первого уровня
		if ($depth == 0) {
			$item_output.= '<a class = "header__menu-link"'. $attributes .'>'.$item->title.'</a>';
		} else {
			//всем ссылкам глубже первого уровня
			$item_output.= '<a class = "header__submenu-link"'. $attributes .'>'.$item->title.'</a>';
		}

		// заканчиваем вывод элемента
		$item_output.= $args->after;
		$output.= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

// Конец Меню

