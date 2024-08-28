<?php get_header() ?> 


    <div class="page-baner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>عنوان صفحه</span> 
          </div>
        </div>
      </div>
    </div>

    <div class="index-blog">
      <div class="container">

      <?php while(have_posts()):the_post(); ?>

        <div class="row">
          <div class="col-md-6">
            <div class="description">
              <h4>  <?php the_title()  ?>   </h4>
              <div class="meta">
                <span><i class="fa fa-calendar-o"></i> <?php echo get_the_date()  ?> </span>
                <span><i class="fa fa-comment-o"></i> <?php echo get_comments_number()  ?> </span>
                <span><i class="fa fa-user"></i> <?php echo get_the_author()?> </span>
                  <p><?php echo get_the_excerpt()  ?></p>
                  <div class="text-start">
                    <a href="<?php the_permalink() ?>" class="site-btn">ادامه مطلب...</a>
                  </div>
              </div>
            </div> 
          </div>
          <div class="col-md-6">
            <div class="pic">
                <?php if(has_post_thumbnail())  ?>
                <img src='<?php the_post_thumbnail_url()?>' alt='<?php the_title() ?>' >
                    
            </div>
          </div>

        </div>

        <?php endwhile ?>
      
   

      </div>
   
      
   
    </div>

</div>

<?php get_footer() ?>