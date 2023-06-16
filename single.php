<!-- (single blog post) -->
<?php get_header(); ?>


<div class="container">

    <h1><?php the_title();?></h1>


    <?php if(has_post_thumbnail()):?>

                                                            <!-- ↓ = bootstrap class -->
        <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">

    <?php endif;?>


    <!-- basically a loop so you can update pages through wordpress -->
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <?php the_content(); ?>

    <?php endwhile; endif; ?>

</div>



<?php get_footer(); ?>