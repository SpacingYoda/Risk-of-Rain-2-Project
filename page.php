<?php get_header(); ?>


<div class="container">

    <h1><?php the_title();?></h1>

    <!-- basically a loop so you can update pages through wordpress -->
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <?php the_content(); ?>

    <?php endwhile; endif; ?>

</div>



<?php get_footer(); ?>