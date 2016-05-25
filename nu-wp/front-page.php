<?php get_header(); the_post(); ?>
          <div id="content" class="row small-up-1 medium-up-2 large-up-2">
            <?php
               if(have_rows('section')):
                 while(have_rows('section')):
                    the_row();
                    $link = get_sub_field('link');
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                      ?>
            <div class="column">
              <section class="icon">
                <a href="#"><img src="<?php echo $image; ?>" alt=""></a>
                <section class="icon-text">
                  <a class="home-icon" href="<?php echo $link; ?>"><?php echo $title; ?></a>
                </section>
              </section>
            </div>
           <?php
                endwhile;
              endif;
            ?>
          </div>
<?php get_footer(); ?>