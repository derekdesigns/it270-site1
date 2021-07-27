<?php
get_header();

?>

<div id="wrapper">
<main>
<!-- if we have posts...
show me the post!!
If not...
we do not have posts!! -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post() ; ?>
<article class="posts">
<h1><a href="
<?php the_permalink() ;?>"><?php the_title() ;?></a></h1>
<div class="meta">
<span><b>Posted By:</b> <?php the_author() ;?></span>
<span><b>Posted On:</b> <?php the_time('F j, Y g:i a') ;?></span>
</div>
<!-- end meta div -->
<div class="thumbnail">
<?php if(has_post_thumbnail()) : ?>
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail(); ?></a>
<?php endif; ?>
</div>
<!-- end thumbnail -->
<?php the_excerpt() ; ?>
<span class="block">
<a href="<?php the_permalink(); ?>">Read More About <?php the_title(); ?></a>
</span>
</article>
<?php endwhile; ?>

<?php else : ?>

<?php 
echo '<h2> Search Results:</h2>
<p>Sorry, but nothing matched your search terms. <br>
Would you like to search again with different keywords?</p>';
?> 
<?php get_search_form(); ?>
<?php endif; ?>
<!-- Please remember, the search results originally is working off of the index.php page -->
</main>

<aside>
This is the Index Page!!
</aside>

</div>
<!-- end wrapper -->
<?php
get_footer();

?>





