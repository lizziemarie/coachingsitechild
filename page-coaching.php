<?php
/**
 * The template for displaying the stages page
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
        <?php echo get_the_title(34); //where # is the ID of the about us page ?>
      </div>
      <?php
        $title_1 = get_field('title_1');
        $subtitle_1 = get_field('subtitle_1');
        $description_1 = get_field('description_1');
        $button_text_1 = get_field('button_text_1');
        $button_link_1 = get_field('button_link_1');
        $title_2 = get_field('title_2');
        $subtitle_2 = get_field('subtitle_2');
        $description_2 = get_field('description_2');
        $button_text_2 = get_field('button_text_2');
        $button_link_2 = get_field('button_link_2');
        $title_3 = get_field('title_3');
        $subtitle_3 = get_field('subtitle_3');
        $description_3 = get_field('description_3');
        $button_text_3 = get_field('button_text_3');
        $button_link_3 = get_field('button_link_3');
        ?>
      <div class="">
        <?php echo $title_1; ?>
        <?php echo $subtitle_1; ?>
        <?php echo $description_1; ?>
        <?php echo $button_text_1; ?>
        <?php echo $button_link_1; ?>
      </div>
      <div class="">
        <?php echo $title_2; ?>
        <?php echo $subtitle_2; ?>
        <?php echo $description_2; ?>
        <?php echo $button_text_2; ?>
        <?php echo $button_link_2; ?>
      </div>
      <div class="">
        <?php echo $title_3; ?>
        <?php echo $subtitle_3; ?>
        <?php echo $description_3; ?>
        <?php echo $button_text_3; ?>
        <?php echo $button_link_3; ?>
      </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
