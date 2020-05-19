<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div>
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        // the_custom_logo();
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                        }
                    }
                ?>
            </div>
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'top-bar'
                    )
                );
            ?>
        </div>
    </header>