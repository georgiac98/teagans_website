<?php get_header(); /* Tells WordPress to include header.php */ ?>
<div class="container-fluid maincontainer ">
    <div class="container">
        <div class="row">
            <section class="col-sm-7 main_text">					<h1>SEARCH</h1>
    <article class="excerpts">
	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</article>

		<?php endwhile; ?>

		

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>
    	</article><!---->
</section>
    <?php get_sidebar(); ?>        
            
     </div>
    </div>
  </div>


<?php get_footer(); ?> 
