

<article>
<?php
    if (!is_single()) {
      echo "<h2>";
      echo '<a href="';
      echo  the_permalink();
      echo '">';
      echo the_title();
      echo "</a>";
      echo '</h2>';
    }
?>
<?php edit_post_link(null,null,null,null,'edit-link'); ?>

<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>

<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
</article>
