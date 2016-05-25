<?php 
/*
Template Name: Single Department
*/
get_header();
the_post();
?>
<section id="title">
  <div class="row">
    <div class="medium-12 columns">
      <h2><?php echo get_the_title(); ?> | Category Review</h2>
    </div>
  </div>
</section>

<div class="row">
  <div class="medium-12 columns">
    <nav aria-label="You are here:" role="navigation">
      <ul class="breadcrumbs">
        <li><a href="#">Home</a></li>
        <li><a href="#">Departments</a></li>
        <!--  <li class="disabled"><a href="#">Departments</a></li> -->

        <li>
        <span class="show-for-sr">Current: </span> <?php echo get_the_title(); ?> Category Review
        </li>
      </ul>
    </nav>
  </div>
</div>

<div class="row small-up-1 medium-up-3 large-up-3">
  <?php $args = array(
    'posts_per_page'   => -1,
    'orderby'          => 'menu_order',
    'order'            => 'ASC',
    'post_type'        => 'nu_categories'
    );
    $categories = get_posts( $args ); 
    foreach ($categories as $category): ?>
  <div class="column">
    <section class="departments">
      <h3><?php echo $category->post_title; ?></h3>
      <?php echo get_the_post_thumbnail( $category->ID, 'home_links_thumb' ); ?>
      <a class="button business float-center" href="<?php echo get_field('overivew_link', $category->ID); ?>">Category Overview &raquo;</a>
      <a class="button category float-center" href="<?php echo get_permalink($category->ID); ?>">Style Rankings &raquo;</a>
    </section>
  </div>
  <?php endforeach; ?>
</div> <!-- end block grid -->
<?php get_footer(); ?>