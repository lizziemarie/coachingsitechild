<?php
/**
 * Template Name: Custom Stage
 * description: >-
 *  Page template without sidebar
 *
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
      <section>
				<?php
	        $this_stage_title = get_field('this_stage_title');
          $this_stage_description = get_field('$this_stage_description');
          $post_title = get_field('post_title');
	        ?>
          <div>
					<?php echo $this_stage_title; ?>
          <?php echo $this_stage_description; ?>
          <?php echo $post_title; ?>
          </div>
      </section>

      <section>
        <?php
            $args = array( 'cat' => '6' );
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
      </section>

		</div>

<?php
get_footer();
