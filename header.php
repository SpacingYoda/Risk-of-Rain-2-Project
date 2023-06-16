<!DOCTYPE html>
<html>
    
    <head>

        <?php wp_head(); ?> <!-- (A script) Also for hooks and adding in scripts -->


    </head>

    <!-- php body_class, allows wordpress to add its own classes to the body -->
    <body <?php body_class();?>>


<!-- Sticky-top makes it stick to the top when scrolling-->
<header class="sticky-top">

    <div class="container">
        
        <?php wp_nav_menu(
        
            array(

                'theme_location' => 'top-menu',
                'menu_class' => 'navigation'
            )

        );?>

    </div>

</header>