<?php 
    function wp_theme_setup(){
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));;
    }

    function wp_custom_list_class($atts,$items,$args)
    {
        $class = 'p-2 text-muted';
        $atts['class'] = $class;
        return $atts;
    }

    // eto ay web hooks para kunin nya yung object
    add_action('after_setup_theme', 'wpb_theme_setup');
    add_filter('nav_menu_link_attributes','wp_custom_list_class', 10 , 3);

?>  