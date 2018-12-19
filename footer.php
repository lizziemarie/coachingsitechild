
<!-- END ROW -->
</div>

<!-- END CONTAINER -->
</div>

<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
<div id="ig-footer">
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-2') ) ?>
</div>
<?php endif; ?>

<?php if(!get_theme_mod('hawthorn_footer_widgets')) : ?>

  <div id="footer-top">

		<div class="sp-container">

			<div class="sp-row">

        <div class="sp-col-6">
          <div class="schedule-a-call">
            <h2 class="footer-title">Schedule a call</h2>
            <p>Let's figure out what program is best for you and your needs</p>
            <p>
              <a class="" href="">BOOK YOUR FREE 15 MINUTE CALL</a>
            </p>
          </div>
        </div>
        <div class="sp-col-6">
          <div class="subscribe-footer">
            <h2 class="footer-title">Subscribe</h2>
            <?php
              if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
                  <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
                  <?php dynamic_sidebar( 'custom-header-widget' ); ?>
                </div>
            <?php endif; ?>
          </div>
        </div>
        </div> <!--added div for schedule a call and subscribe -->

      </div>

    </div>

  </div>

<footer id="footer">

<div class="sp-container">

  <div class="sp-row">

    <div class="<?php if(get_theme_mod('hawthorn_footer_columns') == 3) : ?>sp-col-4<?php else : ?>sp-col-3<?php endif; ?>">

      <div class="footer-widgets">
        <?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-3') ) ?>
      </div>

    </div>

    <div class="<?php if(get_theme_mod('hawthorn_footer_columns') == 3) : ?>sp-col-4<?php else : ?>sp-col-3<?php endif; ?>">

      <div class="footer-widgets">
        <?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-4') ) ?>
      </div>

    </div>

    <div class="<?php if(get_theme_mod('hawthorn_footer_columns') == 3) : ?>sp-col-4<?php else : ?>sp-col-3<?php endif; ?>">

      <div class="footer-widgets">
        <?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-5') ) ?>
      </div>

    </div>

    <?php if(get_theme_mod('hawthorn_footer_columns') == 3) : else : ?>
    <div class="<?php if(get_theme_mod('hawthorn_footer_columns') == 3) : ?>sp-col-4<?php else : ?>sp-col-3<?php endif; ?>">

      <div class="footer-widgets">
        <?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-6') ) ?>
      </div>

    </div>
    <?php endif; ?>

  </div>

</div>

</footer>
<?php endif; ?>



<?php wp_footer(); ?>

</body>

</html>
