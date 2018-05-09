<?php get_header(); ?>

<?php
  if ( is_single() ) {
    echo '<div class="row"> <!-- Page title row -->
    <div class="col col-13">
    <header class="page-title-wrap">
    <h1 class="page-title">';
  } else {
    echo "<h2>";
    echo '<a href="';
    echo  the_permalink();
    echo '">';  }
?>
<?php the_title(); ?>

<?php
  if ( is_single() ) {
    echo '</h1></header></div></div>';
  } else {
    echo '</h2>'; }
?>

<?php if ( is_active_sidebar( 'primary-widget-area' ) || has_nav_menu( 'main-menu' )  ) : ?>
<div class="row">
  <div class="col col-9">
    <?php else : ?>
    <div class="row">
      <div class="col col-13">
        <?php endif; ?>



        <section id="content" role="main">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'entry' ); ?>
          <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
          <?php endwhile; endif; ?>
          <footer class="footer">
            <?php get_template_part( 'nav', 'below-single' ); ?>
          </footer>
        </section>
      </div>
      <?php get_sidebar(); ?>

      <?php if ( !is_active_sidebar( 'primary-widget-area' ) ) : ?>
    </div>
  </div>
  <?php endif; ?>

  <?php get_footer(); ?>
