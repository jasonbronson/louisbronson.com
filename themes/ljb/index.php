<?php get_header(); ?>


<?php die("STOP"); ?>


<div class="container">
	<div class="row">
		<div class="col-sm-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
		</div>
<?php get_template_part( 'layouts/right_rail' ); ?>
	</div>
	<div id="push"></div>
</div>
<?php get_footer(); ?>
