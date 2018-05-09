<?php get_header(); ?>

<div class="row"> <!-- Page title row -->
  <div class="col col-13">
    <header class="page-title-wrap">
      <h1 class="page-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?></h1>
    </header>
  </div>
</div>

<?php if ( is_active_sidebar( 'primary-widget-area' ) || has_nav_menu( 'main-menu' )  ) : ?>
  <div class="row">
    <div class="col col-9">
<?php else : ?>
  <div class="row">
    <div class="col col-13">
<?php endif; ?>


<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
