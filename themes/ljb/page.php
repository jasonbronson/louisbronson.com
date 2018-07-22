<?php
/* Template Name: Page */
get_header(); ?>
<div class="container standard-page">
	<div class="row">
		<div class="col-sm-8">
<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="main-content" class="content">
	<h1 class="entry-title thin"><?php the_title(); ?></h1>
	<?php the_content(); ?>
</div>
<?php
endwhile; endif;
?>
		</div>
<?php get_template_part( 'layouts/right_rail' ); ?>
	</div>
	<div id="push"></div>
</div>
<?php get_footer(); ?>
