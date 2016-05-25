<?php 
/*
Template Name: Departments
 */
get_header();
the_post();
?>
    <section id="title">
      <div class="row">
        <div class="medium-12 columns">
          <h2>Departments</h2>
        </div>
      </div>
    </section>

  
   <div class="row">
        <div class="medium-12 columns">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                  <li><a href="#">Home</a></li>
                 <!--  <li class="disabled"><a href="#">Departments</a></li> -->
                
                  <li>
                    <span class="show-for-sr">Current: </span> Departments
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
  'post_type'        => 'nu_department'
);
$departments = get_posts( $args ); 
foreach ($departments as $department): ?>
  <div class="column">
    <section class="departments">
      <h3><?php echo $department->post_title; ?></h3>
      <?php echo get_the_post_thumbnail( $department->ID, 'home_links_thumb' ); ?>
      <a class="button business float-center" href="<?php echo get_field('overivew_link', $department->ID); ?>">Business Overview   &raquo;</a>
      <a class="button category float-center" href="<?php echo get_permalink($department->ID); ?>">Category &amp; Style Overview  &raquo;</a>
    </section>
  </div>
<?php endforeach; ?>

  </div> <!-- end block grid -->
  <?php get_footer(); ?>