<?php 
function respuesta_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'respuesta_resources');


//nav menu
register_nav_menus(array(
    'primary' => __( 'Menu Principal'),
    'redesSociales' => __( 'Menu - Redes Sociales'),
    'footer' => __( 'Menu - Pie de página')
));

//obtener los hijos del menu
function get_top_ancestor_id() {
    
    global $post;
    
    if ($post->post_parent ) {
        $ancestors = array_reverse(get_post_ancestors( $post->ID));
        return $ancestors[0];
    }
    
    return $post->ID;
}