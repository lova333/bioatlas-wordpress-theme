<?php
/**
 * Tag list
 *
 */
define('WP_USE_THEMES', false);
get_header(); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<div id="main" class="container dmbs-container">
  <div class="col-xs-12">
    <h1 class="hidden">Welcome to the Atlas of Living Australia</h1>
    <ol class="breadcrumb hidden-print">
      <li><a class="font-xxsmall" href="/">Home</a></li>
      <li><a class="font-xxsmall" href="/blogs-news/">Blogs &amp; news updates</a></li>
      <li class="font-xxsmall active"><?php single_tag_title(); ?></li>
    </ol>
    <h2 class="heading-medium">Posts with the <?php single_tag_title(); ?> tag</h2>
  </div>

  <?php if ( is_tag() ) : ?>

<?php
$postsperpage = get_option('posts_per_page');
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'posts_per_page'   => $postsperpage,
  'tag'              => $tag,
  'post_type'        => 'post',
  'post_status'      => 'publish',
  'paged'            => $paged
);
?>
<?php
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) :
  $postCounter = 0;
  // start The Loop
  while ( $the_query->have_posts() ) : $the_query->the_post();
    $postCounter = ++$postCounter;
    $category = get_the_category();
    // Blogs & News has id 72
    $category_id = $category[0]->cat_ID;
    $category_link = get_category_link( $category_id );
    $category_name = $category[0]->cat_name;
?>
<div class="row-fluid">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-body">
          <div class="row">
            <div class="col-md-2">
              <p class="blog-category">
                <a href="<?php echo $category_link; ?>" class="color--pink"><?php echo $category_name ?></a>
              </p>
            </div>
            <div class="col-md-2">
              <p class="blog-date"><?php the_time('j F, Y'); ?></p>
            </div>
            <div class="col-md-8">
              <h3 class="blog-heading-small">
                <a href="<?php the_permalink();?>" class="color--pink"><?php the_title(); ?></a>
              </h3>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

  <?php
  endwhile;
  // end The Loop
  ?>


  <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
    <!-- total list pages for this tag: <?php echo $the_query->max_num_pages ?> -->
    <nav>
      <ul class="pager">
        <li class="previous"><?php echo get_previous_posts_link( '<span aria-hidden="true">&larr;</span> Newer posts' ); ?></li>
        <li class="next"><?php echo get_next_posts_link( 'Older posts <span aria-hidden="true">&rarr;</span>', $the_query->max_num_pages ); ?></li>
      </ul>
    </nav>
  <?php } ?>

  <?php wp_reset_postdata(); ?>

  <?php else: ?>
    <article>
      <h1>Sorry...</h1>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    </article>
  <?php endif; ?>

  <?php endif; ?>
 </div><!-- End container #main col -->
<!-- end content container -->

<?php get_footer(); ?>
