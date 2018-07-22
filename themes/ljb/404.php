<?php
get_header();
$post = get_page_by_path( 'home' );
echo get_the_title( $post );
?>
<div id="main" class="container home js">
	<div class="row">
		<div class="col-8">

			<h1>Oops!</h1>

			<p>That page wasn’t found.</p>

			<p>But while you are here, here are some things that you might find interesting:</p>

<?php 
get_template_part( 'layouts/home_featured' );
 ?>

		</div>
	</div>
	<div id="push"></div>
</div>

<?php get_footer(); ?>