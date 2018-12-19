<?php
/**
 * The template for displaying the contact page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package susiewillettcoaching
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <div class="full-width-label">
        <?php echo get_the_title(23); //where # is the ID of the about us page ?>
      </div>
      <?php
        $background_image = get_field('background_image');
        $size = "full";
        ?>
      <div class="">
        <?php if($background_image) {
          echo wp_get_attachment_image( $background_image, $size);
        }?>
      </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
