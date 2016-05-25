<?php
/*
Template Name: Overview
 */
get_header();
the_post();
?>
    <section id="title">
      <div class="row">
        <div class="medium-12 columns">
          <h2>Home | Overview</h2>
        </div>
      </div>
    </section>

  
   <div class="row">
        <div class="medium-12 columns">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                  <li><a href="#">Home</a></li>
            <!--       <li><a href="#"></a></li> -->
                 <!--  <li class="disabled"><a href="#">Departments</a></li> -->
                
                  <li>
                    <span class="show-for-sr">Current: </span> Overview
                  </li>
                </ul>
            </nav>
        </div>
    </div>

  <section class="content-grid">
        <div class="row small-up-1 medium-up-2 large-up-4">
<?php $args = array(
  'posts_per_page'   => -1,
  'orderby'          => 'menu_order',
  'order'            => 'ASC',
  'post_type'        => 'page',
  'post_parent'      => 0,
);
$pages = get_posts( $args );
foreach ($pages as $page): ?>
        <div class="column">
          <h3><a href="<?php echo get_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a></h3>
          <a href="<?php echo get_permalink($page->ID); ?>"><?php echo get_the_post_thumbnail( $page->ID, 'home_links_thumb' ); ?></a>
        </div>
 <?php endforeach; ?>
      </div>
</section>
 <?php get_footer(); ?>