<?php get_header(); ?>

  <div class="row"> <!-- Page title row -->
    <div class="col col-13">
      <header class="page-title-wrap">
        <h1 class="page-title">
          <?php single_cat_title(); ?>
        </h1>
      </header>
    </div>
  </div>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php get_footer(); ?>
