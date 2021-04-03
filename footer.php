<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">
	<div class="container">
		<picture>
			<source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/img/glass-cheers.png 400w,
			<?php echo get_template_directory_uri(); ?>/img/glass-cheers@2x.png 800w">
			<img src="<?php echo get_template_directory_uri(); ?>/img/glass-cheers@2x.png" alt="cheers">
		</picture>

		<div class="site-info">
			<h3>Warning ; Under Liquare control</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel consequuntur dolor, sapiente adipisci quis ducimus
				unde quibusdam id accusantium vero, ex distinctio vitae eaque perspiciatis repellat nam magnam assumenda. Vero.</p>
		</div>
	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js' id='bootstrap-js'></script> -->
</body>

</html>