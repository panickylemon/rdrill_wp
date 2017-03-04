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
	wp_enqueue_script('video', get_stylesheet_directory_uri() . '/plugins/js/video.js', array(), false, false);
    wp_enqueue_script('tablesorter', get_stylesheet_directory_uri() . '/plugins/tablesorter/jquery.tablesorter.js', array(), false, false);
    wp_enqueue_script('tablesorter-static', get_stylesheet_directory_uri() . '/plugins/tablesorter/widget-staticRow.js', array(), false, false);
	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/main.js', array(), false, false);

}
add_action('wp_enqueue_scripts', 'custom_js');


// Меню

if(function_exists('register_nav_menus')){
	register_nav_menus(
			array(
					'main_menu' => 'Главное меню',
					'aside_menu' => 'Меню для дочерних раздела > О компании',
                    'aside-help_menu' => 'Меню для дочерних раздела > Помощь'
			)
	);
}

// Главное меню
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

//Боковое меню
class asideMenuWalker extends Walker_Nav_Menu
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
        $output .= '<ul>';
    }

    function start_el(&$output, $item, $depth, $args) {
        // назначаем классы li-элементу и выводим его
        $class_names = join( ' ', $item->classes );

        $class_names = ' class="' .esc_attr( $class_names ). '"';

        $output.= '<li id="menu-item-' . $item->ID . '"' .$class_names. '>';


        $attributes = !empty( $item->url ) ? ' href="' .esc_attr($item->url). '"' : '';
        $item_output = $args->before;
        //всем ссылкам первого уровня
        if ($depth == 0) {
            $item_output.= '<a class = "about-sidebar__list-item"'. $attributes .'>'.$item->title.'</a>';
        }

        // заканчиваем вывод элемента
        $item_output.= $args->after;
        $output.= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}


//Боковое меню
class helpMenuWalker extends Walker_Nav_Menu
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
        $output .= '<ul>';
    }

    function start_el(&$output, $item, $depth, $args) {
        // назначаем классы li-элементу и выводим его
        $class_names = join( ' ', $item->classes );

        $class_names = ' class="' .esc_attr( $class_names ). '"';

        $output.= '<li id="menu-item-' . $item->ID . '"' .$class_names. '>';


        $attributes = !empty( $item->url ) ? ' href="' .esc_attr($item->url). '"' : '';
        $item_output = $args->before;
        //всем ссылкам первого уровня
        if ($depth == 0) {
            $item_output.= '<a class = "about-sidebar__list-item"'. $attributes .'>'.$item->title.'</a>';
        }

        // заканчиваем вывод элемента
        $item_output.= $args->after;
        $output.= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}


// Конец Меню


function exclude_cat($query)
{
    if ($query->is_home) {
        $query->set('cat', '-90');
    } // id категории
    return $query;
}
add_filter('pre_get_posts', 'exclude_cat');


/*
 * "Хлебные крошки" для WordPress
 * версия: 2017.01.21
 * лицензия: MIT
*/


function dimox_breadcrumbs() {

    /* === ОПЦИИ === */
    $text['home'] = 'Главная'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author'] = 'Статьи автора %s'; // текст для страницы автора
    $text['404'] = 'Ошибка 404'; // текст для страницы 404
    $text['page'] = 'Страница %s'; // текст 'Страница N'
    $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

    $wrap_before = '<ul class="breadcrumb">'; // открывающий тег обертки
    $wrap_after = '</ul><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep = ''; // разделитель между "крошками"
    $sep_before = ''; // тег перед разделителем
    $sep_after = ''; // тег после разделителя
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $before = '<li class="breadcrumb-item active">'; // тег перед текущей "крошкой"
    $after = '</li>'; // тег после текущей "крошки"
    /* === КОНЕЦ ОПЦИЙ === */

    global $post;
    $home_url = home_url('/');
    $link_before = '<li class="breadcrumb-item">';
    $link_after = '</li>';
    $link_attr = '';
    $link_in_before = '';
    $link_in_after = '';
    $link = $link_before . '<a href="%1$s">' . '%2$s' . '</a>' . $link_after;
    $frontpage_id = get_option('page_on_front');
    $parent_id = ($post) ? $post->post_parent : '';
    $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
    $home_link = $link_before . '<a href="' . $home_url . '"' . '>' . $text['home'] . '</a>' . $link_after;

    if (is_home() || is_front_page()) {

        if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

    } else {

        echo $wrap_before;
        if ($show_home_link) echo $home_link;

        if ( is_category() ) {
            $cat = get_category(get_query_var('cat'), false);
            if ($cat->parent != 0) {
                $cats = get_category_parents($cat->parent, TRUE, $sep);
                $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                if ($show_home_link) echo $sep;
                echo $cats;
            }
            if ( get_query_var('paged') ) {
                $cat = $cat->cat_ID;
                echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
            }

        } elseif ( is_search() ) {
            if (have_posts()) {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
            } else {
                if ($show_home_link) echo $sep;
                echo $before . sprintf($text['search'], get_search_query()) . $after;
            }

        } elseif ( is_day() ) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
            echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
            if ($show_current) echo $sep . $before . get_the_time('d') . $after;

        } elseif ( is_month() ) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
            if ($show_current) echo $sep . $before . get_the_time('F') . $after;

        } elseif ( is_year() ) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . get_the_time('Y') . $after;

        } elseif ( is_single() && !is_attachment() ) {
            if ($show_home_link) echo $sep;
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current) echo $sep . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $sep);
                if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
//                if (in_category('novosti')) {
//                    echo $link_before.'<a href="/about/news/">Новости</a>'.$link_after;
//                } elseif (in_category('bez-rubriki')) {
//                    echo $link_before.'<a href="/about/article/">Статьи</a>'.$link_after;
//                } else {
//                    echo $cats;
//                }

                echo $cats;
                if ( get_query_var('cpage') ) {
                    echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
                } else {
                    if ($show_current) echo $before . get_the_title() . $after;
                }
            }

            // custom post type
        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());
            if ( get_query_var('paged') ) {
                echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . $post_type->label . $after;
            }

        } elseif ( is_attachment() ) {
            if ($show_home_link) echo $sep;
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            if ($cat) {
                $cats = get_category_parents($cat, TRUE, $sep);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                echo $cats;
            }
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif ( is_page() && !$parent_id ) {
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif ( is_page() && $parent_id ) {
            if ($show_home_link) echo $sep;
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs)-1) echo $sep;
                }
            }
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif ( is_tag() ) {
            if ( get_query_var('paged') ) {
                $tag_id = get_queried_object_id();
                $tag = get_tag($tag_id);
                echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            }

        } elseif ( is_author() ) {
            global $author;
            $author = get_userdata($author);
            if ( get_query_var('paged') ) {
                if ($show_home_link) echo $sep;
                echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
            }

        } elseif ( is_404() ) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . $text['404'] . $after;

        } elseif ( has_post_format() && !is_singular() ) {
            if ($show_home_link) echo $sep;
            echo get_post_format_string( get_post_format() );
        }

        echo $wrap_after;

    }
} // end of dimox_breadcrumbs()


//Создание миниатюр
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'similar-thumb', 433, 254, array( 'left', 'top' ) );
}

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'news-thumb', 401, 378, array( 'left', 'top' ) );
}



// Поддрежка виджетов
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<span class="widgettitle">',
        'after_title' => '</span>',
    ));
}