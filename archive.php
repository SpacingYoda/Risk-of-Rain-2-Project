<!-- (blog archive) -->
<?php get_header(); ?>


<div class="container">

    <h1><?php single_cat_title();?></h1>

    <!-- basically a loop so you can update pages through wordpress -->
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <!-- ↓ = 2x bootstrap class -->
        <div class="card">
            <div class="card-body">
                <h3><?php the_title();?></h3>
                <!-- Excerpt so it doesn't show the full post-->
                <?php the_excerpt(); ?>         <!-- ↓ = bootstrap class -->
                <a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>
            </div>
        </div>

    <?php endwhile; endif; ?>

</div>



<?php get_footer(); ?>