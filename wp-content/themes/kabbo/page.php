<?php
/* 	KABBO Theme's General Page to display all Pages
	Copyright: 2012-2014, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/

 get_header(); ?><div id="container"><div id="content">  
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h3 class="subtitle"><?php echo get_post_meta($post->ID, 'sb_subtitle', 'true'); ?></h3>
        <h1 class="page-title"><?php the_title(); ?></h1>
			<div class="content-ver-sep"> </div>
            <div class="entrytext">
 <?php the_post_thumbnail('category-thumb'); kabbo_content(); ?>
 

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; ?><div class="clear"> </div>
	<?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
	<?php comments_template(); ?>
	<?php else: ?>
		<p>Sorry, no pages matched your criteria.</p>
	<?php endif; ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>