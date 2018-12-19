<?php
/**
 * The template for displaying the about page
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
        $about_image = get_field('about_image');
        $about_title = get_field('about_title');
        $about_description = get_field('about_description');
        $size = "full";
        ?>
      <div class="">
        <?php echo $about_title; ?>
        <?php echo $about_description; ?>
      </div>
      <div class="">
        <?php if($about_image) {
          echo wp_get_attachment_image( $about_image, $size);
        }?>
      </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
