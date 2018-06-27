<?php 

get_header(); 

if ( have_posts() ) : 
    while (have_posts()) : the_post() ?>

    <article class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <p class="post-info">
        Publicado el <?php the_time('l, j F Y, g:i a'); ?> | 
        Autor: <?php the_author(); ?> | 
        <?php 
            $categories = get_the_category();
            $separador = ", ";
            $output = '';
            
            if($categories) {
                foreach($categories as $category){
                    $output .= '<a href ="' . get_category_link($category-> term_id) . '">' . $category->cat_name . '</a>' . $separador;
                }
                
                echo trim($output, $separador);
            }
         ?>
        
        </p>
        
        <?php the_content(); ?>
    </article>

    <?php endwhile;

    else :
        echo '<p>No se encuentra el contenido</p>';

    endif;

get_footer();

?>