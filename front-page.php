<?php get_header();
/* Template Name: Front Page */
?>
<div id="hero">
    <img src="http://dermur7.dreamhosters.com/MAMP/htdocs/it270/site-summer-1/wp-content/uploads/yellowstone-header-home.jpg"
    alt="banner">
</div> <!-- end hero -->

<div class="wrapper">
<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail() ; ?>
<?php endif; ?>
<!-- if we have posts...
show me the post!!
If not...
we do not have posts!! -->

<?php while(have_posts()) : the_post() ; ?>

<?php the_content() ; ?>

<?php endwhile; ?>

</div> <!-- end wrapper -->

<?php get_footer(); ?>
