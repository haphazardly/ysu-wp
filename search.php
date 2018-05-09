<?php get_header(); ?>
<div class="row"> <!-- Page title row -->
  <div class="col col-13">
    <header class="page-title-wrap">
      <h1 class="page-title">Results for <?php printf( __( ' %s', 'blankslate' ), get_search_query() ); ?></h1>
    </header>
  </div>
</div>
<section id="content" role="main">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h2 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ); ?></h2>
</header>
<section class="entry-content">
<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
<?php endif; ?>
</section>
<?php get_footer(); ?>
