
<?php 
    get_header();
?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
    <div class="tyuuyuu"> 
	<div class="tryrty">
        <?php the_title()?>
    </div>
    <div class="wwdddd">
        <?php 
            the_post_thumbnail(  )
        ?>
    </div>
    </div>   
	<?php endwhile; ?>
<?php endif; ?>
<?php 
    get_footer();
?>
