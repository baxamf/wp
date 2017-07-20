<?php 

/*
Template Name: Special Page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
		<h2><?php the_title(); ?></h2>
		
		<div class="info-box">
			<h4>Disclamer Title</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia sint, veritatis vero facere soluta eos alias, esse cum magnam aut repellat ipsa tempora quae eligendi quaerat aliquid?</p>
		</div>

		<?php the_content(); ?>
	</article>

	<?php endwhile;

	else :
		echo '<p>No content found</p>';
	endif;
 
 get_footer();

 ?>
