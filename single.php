
<?php 
    get_header();
?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
    <div class="wwwwe">
	<div class="erwer">
        <?php the_title()?>
    </div>
    <div class="wewrer">
        <?php 
            the_post_thumbnail(  );
            get_the_tag_list();
            echo get_avatar();
        ?>
    </div>
    </div>    
	<?php endwhile; ?>
<?php endif; ?>
<?php 
    get_footer();
?>
