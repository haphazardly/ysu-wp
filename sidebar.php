<div class="col col-4">

  <aside role="complementary">
    <div class="sidebar-box">
      <nav role="main">



      <?php
      if ( has_nav_menu( 'main-menu' ) ) {

        wp_nav_menu( array( 'theme_location' => 'main-menu' ) );

      } ?>
      </nav>
          <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
            <div id="primary" class="widget-area">
              <ul class="xoxo">
            <?php dynamic_sidebar( 'primary-widget-area' ); ?>
          </ul>
        </div>
          <?php endif; ?>
    </aside>
  </div>
  </div>
