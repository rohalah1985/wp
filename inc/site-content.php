<div class="site_content">
  <div class="container">
    <div class="row">



      <div class="col-md-6">
        <div class="box">
          <span class="title">مطالب پربازدید</span>
          <div class="d-flex post_item_bx">
            <div class="col-md-5">
              <div class="pic">
                <img src="<?php echo get_template_directory_uri() ?>/img/css_acardion_menu-min.png" alt="">
              </div>
            </div>
            <div class="col-md-7">
              <div class="desc2">
                <h5>عنوان مطلب در این قسمت ، آموزش وردپرس</h5>
                <p>عنوان مطلب در این قسمت ، آموزش وردپرس نوان مطلب در این قسمت ، آموزش وردپرس </p>
                <span><i class="fa fa-calendar-o"></i>1403.5.28</span>
              </div>
            </div>
          </div>
          <div class="d-flex post_item_bx">
            <div class="col-md-5">
              <div class="pic">
                <img src="<?php echo get_template_directory_uri() ?>/img/wordpress_sidebars-min.png" alt="">
              </div>
            </div>
            <div class="col-md-7">
              <div class="desc2">
                <h5>عنوان مطلب در این قسمت ، آموزش وردپرس</h5>
                <p>عنوان مطلب در این قسمت ، آموزش وردپرس نوان مطلب در این قسمت ، آموزش وردپرس </p>
                <span><i class="fa fa-calendar-o"></i>1403.5.28</span>
              </div>
            </div>
          </div>
          <div class="d-flex post_item_bx">
            <div class="col-md-5">
              <div class="pic">
                <img src="<?php echo get_template_directory_uri() ?>/img/custom_search-min.png" alt="">
              </div>
            </div>
            <div class="col-md-7">
              <div class="desc2">
                <h5>عنوان مطلب در این قسمت ، آموزش وردپرس</h5>
                <p>عنوان مطلب در این قسمت ، آموزش وردپرس نوان مطلب در این قسمت ، آموزش وردپرس </p>
                <span><i class="fa fa-calendar-o"></i>1403.5.28</span>
              </div>
            </div>
          </div>
          
      
        </div>
      </div>


      <?php 
$wordpress_posts =new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => '2',
    'category_name' => 'wordpress'
    ]);

?>

      <div class="col-md-6">

        <div class="box">
          <span class="title">آموزش وردپرس  </span>
          <?php if($wordpress_posts->have_posts()):while($wordpress_posts->have_posts()):$wordpress_posts->the_post(); ?>

          <div class="d-flex post_item_bx">
            <div class="col-md-5">
              <div class="pic">

              <?php if(has_post_thumbnail()){ ?>
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                <?php } ?>

                <?php if (!has_post_thumbnail()) { ?>
                    <img src="<?php echo WP_DIR?>/img/noimage.png" alt="<?php the_title() ?>">

                    <?php } ?>

             
              </div>
            </div>
            <div class="col-md-7">
              <div class="desc2">
                <a href="<?php the_permalink() ?>"><h5> <?php the_title() ?> </h5></a>
                <p><?php echo get_the_excerpt()  ?></p>
                <span><i class="fa fa-calendar-o"></i> <?php echo get_the_date() ?> </span>
              </div>
            </div>
          </div>
      
   
          <?php endwhile ?>
      
        </div>
       
      </div>
      <?php endif ;?>
    </div>
    
    
        <?php wp_reset_postdata() ;?>
       
    
  </div>

  </div>