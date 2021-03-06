<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        <?php bloginfo('name') ?>
    </title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div class="container">

        <!-- site-header -->
        <header class="site-header">
            <h1><?php bloginfo('name') ?></h1>
            <h5><?php bloginfo('description') ?>
           <!-- <?php if( is_page('cultura')) { ?> - Respuesta <?php }?> -->
           </h5>

            <nav class="site-header">
                <?php 
                    $args = array(
                        'theme_location' => 'primary'
                    );
                ?>

                    <?php wp_nav_menu( $args ); ?>
            </nav>

            <nav class="site-nav children-links clearfix">
                <ul>
                    <?php 
                    $args = array(
                        'child_of' => get_top_ancestor_id(),
                        'title_li' => ''
                    );
                ?>

                        <?php wp_list_pages($args); ?>
                </ul>
            </nav>

            <!--<nav class="site-header">
                <?php 
                $args = array(
                    'theme_location' => 'redesSociales'
                );
               ?>

                    <?php wp_nav_menu( $args ); ?>
            </nav>-->

        </header>