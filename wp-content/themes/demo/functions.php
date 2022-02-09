<?php
/**
 * khai  báo hằng giá trị
 * themes_url = lay đường dẫn cho theme
 * core = lay đường dẫn thư mục /core
 */
define('THEME_URL', get_stylesheet_directory() );


/**
 * thiết lập chiều rộng
 */
if ( !isset($content_width)) {
    $content_width = 600;
}
/**
 * khai báo chức năng
 */

if( !function_exists('khang_theme_setup')){
    function khang_theme_setup() {
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('demo', $language_folder);
        /**
         * tự động thêm link
         */
        add_theme_support('automatic-feed-links');
        /**
         * them post thumbnail
         */
        add_theme_support('post-thumbnails');
        /**
         * post format
         */
        add_theme_support('post-formats', array(
            'khang',
            'khang'
        ));
        /**
         * them title-tag
         */
        add_theme_support('title-tag');
        /**
         * them background
         */
        $default_background = array(
            'default-color' => '#000000'
        );
        add_theme_support('custom-background', $default_background );
        /**
         * them menu
         */
        register_nav_menu('primary-menu', __ ('Primary Menu', 'demo') );
        /**
         * them sidebar
         */
        $sidebar = array(
            'name' => __('Main Sidebar', 'demo'),
            'id' => 'main-sidebar',
            'description' => __ ('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',

        );
        register_sidebar( $sidebar);

    }
    add_action('init','khang_theme_setup');

}

/*-------template-------*/
if (!function_exists('demo_header')) {
    function demo_header() {  ?>
        <div class="site-name">
            <?php
                if(is_home()) {
                    printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename') );
                }else{
                    printf('<p><a href="%1$s" title="%2$s">%3$s</a></p>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename') );

                }
            ?>
        </div>
        <div class="site-description"> <?php bloginfo('description');?> ></div><?php
    }
}

/**
 * thiết lập menu header
 */
if (!function_exists('demo_menu')) {
    function demo_menu($menu) {
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu
        );
        wp_nav_menu($menu);
    }
}
/**
 * hàm tạo trang
 */
if (!function_exists('demo_pagination')) {
    function demo_pagination()
    {
        if($GLOBALS['wp_query']-> max_num_pages < 2){
            return'';
        } ?>
        <nav class="pagination" role="navigation">
            <?php if (get_next_post_link()) : ?>
                <div class="prev"><?php next_posts_link(__('Older Posts','demo'));?></div>
            <?php endif; ?>

            <?php if (get_previous_post_link()) : ?>
                <div class="next"> <?php previous_posts_link(__('Newest Posts','demo'));?></div>

            <?php endif; ?>

        </nav>
        <?php


    }
}
/**
 * hàm hiển thị thumbmail
 */
if (!function_exists('demo_thumbnail')) {
    function demo_thumbnail($size){
        if (! is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')) : ?>
        <figure class="post-thumbnail"><?php the_post_thumbnail($size);?></figure>
        <?php endif; ?>
            <?php
    }
}
/**
 * hàm hiển thị tiêu đề để post
 */
if (!function_exists('demo_entry_header')) {
    function demo_entry_header(){ ?>
        <?php if( is_single()) : ?>
                <h1><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a></h1>
        <?php else: ?>
                <h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a></h2>
        <?php endif; ?>
    <?php

}
}