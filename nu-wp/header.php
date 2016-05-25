<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Uses Buying Guide</title>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
  </head>
<body>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <div class="off-canvas position-left" id="offCanvas" data-off-canvas>
        <button class="close-button" aria-label="Close menu" type="button" data-close>
          <span aria-hidden="true">&times;</span>
        </button>
        <?php $args = array(
          'posts_per_page'   => -1,
          'orderby'          => 'menu_order',
          'order'            => 'ASC',
          'post_type'        => 'page',
          'post_parent'      => 0,
        );
        $parent_pages = get_posts( $args );
        foreach ($parent_pages as $parent_page) {
          echo '<a href ="' . get_permalink($parent_page->ID) . ' ">';
          echo '<h2 class="menu-header">' . $parent_page->post_title . '</h2>';
          echo '</a>';
          $child_args = array(
            'posts_per_page'   => -1,
            'orderby'          => 'title',
            'order'            => 'ASC',
            'post_type'        => 'page',
            'post_parent'      => $parent_page->ID,
          );
          $child_pages = get_posts( $child_args );
          echo '<ul class="nav">';
          foreach ($child_pages as $child_page): ?>
          <li><a href="<?php echo get_permalink($child_page->ID); ?>"><?php echo $child_page->post_title; ?></a></li>
 <?php endforeach; ?>
         </ul>  
 <?php } ?>
      </div>
      <div class="off-canvas-content" data-off-canvas-content>
          <section id="menu">
            <div class="row">
              <div class="medium-12 columns">
                <!-- <button type="button" class="button" data-toggle="offCanvas">Open Menu</button> -->
                <img src="<?php bloginfo('template_directory'); ?>/img/burger-menu.png" class="burger-icon float-left" alt="" data-toggle="offCanvas">              
                <ul class="logo">
                  <li><img src="<?php bloginfo('template_directory'); ?>/img/logo-1.png" class="logo" alt="" /></li>
                  <li><img src="<?php bloginfo('template_directory'); ?>/img/logo2.png" class="logo" alt="" /></li>
                </ul>
                <!--   <h1 class="big-logo">Online Buying Guide </h1> -->
                <!--   <h1 class="logo show-for-small-only">Online Buying Guide </h1> -->
              </div>
            </div>
          </section>
        