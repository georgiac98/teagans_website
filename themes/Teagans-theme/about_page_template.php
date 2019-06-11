<?php
/*
Template Name:About
*/
?>

<?php get_header(); /* Tells WordPress to include header.php */ ?>

                    
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  
                   
 					

    
    
    

		<div class="postcontent">
			<?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'alignright')); ?><?php */?>
			<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong>', 'after' => '</p>')); ?>
        </div><!--postcontet-->
		

	
   
<?php endwhile; ?>
			
	<?php else: ?>
	<div class="post">
		<p>Sorry, no posts found.</p>
	</div><!--post-->
	<?php endif; ?>
	


<!--
     </div>
    </div>
  </div>
-->


<?php get_footer(); ?>