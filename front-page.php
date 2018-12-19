<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package susiewillettcoaching
 */

get_header();
?>

<div class="sp-container content">

	<div class="sp-row">

		<div id="main">
      <section id="welcome-feature">
				<?php
	        $hero_image = get_field('hero_image');
	        $hero_tagline = get_field('hero_tagline');
	        $welcome = get_field('welcome');
	        $size = "full";
	        ?>
					<div class="">
						<?php if($hero_image) {
							echo wp_get_attachment_image( $hero_image, $size);
						}?>
					</div>
					<?php echo $hero_tagline; ?>
					<?php echo $welcome; ?>
      </section>

			<section id="about-feature">
				<?php
					$about_title = get_field('about_title');
					$about_description = get_field('about_description');
					$about_button_text = get_field('about_button_text');
					$about_button_link = get_field('about_button_link');
					$about_image = get_field('about_image');
					$col_1_image = get_field('col_1_image');
					$col_1_text = get_field('col_1_text');
					$col_1_link = get_field('col_1_link');
					$col_2_image = get_field('col_2_image');
					$col_2_text = get_field('col_2_text');
					$col_2_link = get_field('col_2_link');
					$col_3_image = get_field('col_3_image');
					$col_3_text = get_field('col_3_text');
					$col_3_link = get_field('col_3_link');
					$size = "full";
					?>
					<div class="">
						<div class="">
							<?php if($about_image) {
								echo wp_get_attachment_image( $about_image, $size);
							}?>
						</div>
						<div class="">
							<?php echo $about_title; ?>
							<?php echo $about_description; ?>
						</div>
					</div>

					<div class="">
						<div class="">
							<?php if($col_1_image) {
								echo wp_get_attachment_image( $col_1_image, $size);
							}?>
							<?php echo $col_1_text; ?>
							<?php echo $col_1_link; ?>
						</div>
						<div class="">
							<?php if($col_2_image) {
								echo wp_get_attachment_image( $col_2_image, $size);
							}?>
							<?php echo $col_2_text; ?>
							<?php echo $col_2_link; ?>
						</div>
						<div class="">
							<?php if($col_3_image) {
								echo wp_get_attachment_image( $col_3_image, $size);
							}?>
							<?php echo $col_3_text; ?>
							<?php echo $col_3_link; ?>
						</div>
					</div>
      </section>

      <section class="recent-posts-feature">
				<?php
					$recent_posts_title = get_field('recent_posts_title');
					$recent_posts_button_text = get_field('recent_posts_button_text');
					$recent_posts_button_link = get_field('recent_posts_button_link');
					?>
				<div class="full-width-label">
				</div>
				<div class="">
					<?php echo $recent_posts_title; ?>

					<?php
							$args = array( 'posts_per_page' => '3' );
							$recent_posts = new WP_Query($args);
							while( $recent_posts->have_posts() ) :
							    $recent_posts->the_post() ?>
							    <li>
							        <?php if ( has_post_thumbnail() ) : ?>
							            <?php the_post_thumbnail('thumbnail') ?>
							        <?php endif ?>
											<?php the_date() ?>
											<a href="<?php echo get_permalink() ?>"><?php the_title() ?></a>
											<?php
												$categories = get_the_category();
												$separator = ' ';
												$output = '';
												?>
											<?php if ( ! empty( $categories ) ) {
														foreach( $categories as $category ) {
														$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
														}
														echo trim( $output, $separator );
														}
											?>
							    </li>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); # reset post data so that other queries/loops work ?>
					<p>
						<a class="" href="<?php echo $recent_posts_button_link; ?>"><?php echo $recent_posts_button_text; ?></a>
					</p>
				</div>
      </section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
