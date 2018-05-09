<?php get_header(); ?>

<div class="row"> <!-- Page title row -->
	<div class="col col-13">
		<header class="page-title-wrap">
			<h1 class="page-title"><?php wp_title(); ?></h1>
		</header>
	</div> <!-- Page title row -->
	<div class="row">

<?php if ( is_active_sidebar( 'primary-widget-area' ) || has_nav_menu( 'main-menu' ) ) : ?>
    <div class="col col-9">
<?php else : ?>
    <div class="col col-13">
<?php endif; ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php comments_template(); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>

		</div>
		<?php get_sidebar(); ?>

		<?php if ( !is_active_sidebar( 'primary-widget-area' ) ) : ?>
		</div>
	</div>

<?php endif; ?>



<?php get_footer(); ?>
