    <?php 
/*
Template Name: Single Style
 */
get_header();
the_post();
?>
    <section id="title">
      <div class="row">
        <div class="medium-12 columns">
          <h2><?php echo get_the_title(); ?> | Style Rankings</h2>
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
                    <span class="show-for-sr">Current: </span> <?php echo get_the_title(); ?> Style Rankings
                  </li>
                </ul>
            </nav>
        </div>
    </div>


  <div class="row small-up-1 medium-up-2 large-up-2">
<?php $args = array(
'posts_per_page'   => -1,
'orderby'          => 'menu_order',
'order'            => 'ASC',
'post_type'        => 'nu_item'
);
$styles = get_posts( $args ); 
foreach ($styles as $style): ?>
<div class="column">
  <section class="departments">
  <h3><?php echo $style->post_title; ?></h3>
  <?php echo get_the_post_thumbnail( $style->ID, 'home_links_thumb' ); ?>
    <ul class="description">
      <li class="low">Low Performer</li>
      <li class="mid">Mid Performer</li>
      <li class="high">High Performer</li>
    </ul>
  <br />
  <ul class="rank">
    <?php
      $nums = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );
      foreach($nums as $num):
      $class_string = "";
      if($num < 4) {
      $class_string = 'red';
      }
      elseif ($num < 8){
      $class_string = 'yellow';
      }
      else {
      $class_string = 'green';
      }
      if($num == get_field('performance_score', $style) ) {
      $class_string = 'selected';
      }
    ?>
    <li class="<?php echo $class_string; ?>"><?php echo $num; ?></li>
    <?php endforeach; ?>
  </ul>
              <div class="buy">
                <div class="avoid"><p>Avoid Buying</p></div>
                <div class="consider"><p>Consider Buying</p></div>
              </div>
              <a class="button business float-center" href="<?php echo get_permalink($style->ID); ?>">Item Rankings &raquo;</a>
                </section>
         </div>
<?php endforeach; ?>
  </div> <!-- end block grid -->
  
  <div class="row">
    <div class="medium-12 columns">
      <div id="back-top">
        <a class="back-to-top" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/back-to-top.png" alt="" />&nbsp; Back to Top</a>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>