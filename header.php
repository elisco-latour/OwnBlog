<?php //
/*
 * ============================
 * header.php
 * 
 * 
 * The theme Header
 * ============================
 */
?>

<!DOCTYPE>
<html <?php language_attributes(); ?> class="no-js">

    <head>
        <meta charset="<?php bloginfo("chaset"); ?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title><?php wp_title("|", TRUE, "right") ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <meta name="viewport" content="device=device-width, initial-scale=1"/>

        <!--Le favicon et l'Apple Touch icon-->
        <?php
           $favicon = IMAGES . '/icons/favicon.ico';
           $touch_icon = IMAGES . '/icons/apple-touch-icon-precomposed.png';
        ?>
        <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo $touch_icon; ?>" sizes="152x152"/>
        
        <!--Charger les metas de Wordpress-->
        <?php wp_head(); ?>
        
    </head>
    <body <?php body_class(); //Ajout de toutes les classes nécessaires Wordpress à la balise body?>>
            <div class="site-wrapper">

                <div class="site-wrapper-inner">

                    <div class="cover-container">

                        <div class="masthead clearfix">
                            <div class="inner">
                                <h3 class="masthead-brand">
                                    <a href="<?php esc_url(home_url('/')); ?>">
                                        <?php bloginfo('name'); ?>
                                    </a>
                                </h3>
                                <nav>
                                    <!--<ul class="nav masthead-nav">
                                        <li class="active"><a href="#">Home</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>-->
                                    <?php
                                            wp_nav_menu( array(
                                                'menu_class'=>'nav masthead-nav' ,
                                                'theme_location'=>'enfant-menu-principal',
                                                 'container'=>FALSE
                                            ));
                                    ?>
                                </nav>
                            </div>
                        </div>