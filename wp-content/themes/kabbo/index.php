<?php 
/* KABBO Theme's Index Page to hsow Blog Posts
	Copyright: 2012-2014, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/

get_header(); ?><div id="container">  
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
 <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('thumbnail');  kabbo_content(); ?>
 <div class="clear"> </div>
 <div class="up-bottom-border">
  
 <p class="postmetadata"><span class="postmetadataw">Posted by: <?php the_author_posts_link() ?> | on <?php the_time('F j, Y'); ?></span><br />Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php the_tags('<br />Tags: ', ', ', '<br />'); ?></p>
 
 </div>
 </div></div>
 
 <?php endwhile; ?>

<div id="page-nav">
<div class="alignleft"><?php previous_posts_link('Previous Entries' ) ?></div>
<div class="alignright"><?php next_posts_link('Next Entries') ?></div>
</div>
  
 
 <?php else: ?>
 
<h1 class="page-title">Not Found</h1>
<h3 class="arc-src"><span>Apologies, but the Page/Post/Content you requested could not be found. Perhaps searching will help</span></h3>

<?php get_search_form(); ?>
<span id="page-nav"><a class="alignleft" href="<?php echo esc_url( home_url() ); ?>" >Or Return to the Home Page</a></span></p>
<div class="clear"> </div>
<h2 class="post-title-color">You can also Visit the Following. These are the Featured Contents</h2>
<div class="content-ver-sep"></div><br />
<?php get_template_part( 'featured-box' ); ?>
 
<?php endif; ?>


</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>