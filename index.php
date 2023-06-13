<?php echo get_header(); ?>


<h1><?php the_title(); ?></h1>




<?php 

echo 'deze tekst is aangepast d.d. '.date("d-m-Y"); 
echo "<br>".get_footer();

?>
<div id="kader">
<p><?php the_content(); ?></p>
</div>