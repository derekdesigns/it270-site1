<?php get_header(); ?>

<div id="hero">
<img src="<?php echo get_template_directory_uri();?>/../../uploads/yellowstone-inner.jpg"
alt="banner">
</div> <!-- end hero -->

<div class="wrapper">
<main>
<!-- if we have posts...
show me the post!!
If not...
we do not have posts!! -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post() ; ?>
<article class="posts">
<h1> <?php the_title() ;?> </h1>

<div class="meta">
<span><b>Posted By:</b> <?php the_author() ;?></span>
<span><b>Posted On:</b> <?php the_time('F j, Y g:i a') ;?></span>
</div> <!-- end meta div -->

</article>
<?php the_content() ; ?>
<?php endwhile; ?>
<?php else : ?>

<?php echo wpautop('Sorry, no posts were found!'); ?> 
<?php endif; ?>

<span class="next-previous">
    <?php (previous_post_link()) ? '%link' : ''; ?> 
    &nbsp; &nbsp;
    <?php (next_post_link()) ? '%link' : ''; ?>
</span>

<?php comments_template(); ?>
</main>

<aside>
This is my single page.
</aside>

</div> <!-- end wrapper -->

<?php get_footer(); ?>
