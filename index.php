<?php get_header() ?> 


 <?php get_template_part("inc/page","baner"); ?>

    <div class="index-blog">
      <div class="container">
        <span class="page-title"><i class="fa fa-angle-left"></i>
        <?php if(is_home()) {
          echo "اخبار و مقالات";
        }
        elseif(is_category()){
          echo single_cat_title();
        }
        elseif(is_tag()){
          echo single_tag_title();
        }
        elseif (is_search()){
          echo "جستجو کردید برای :";
          echo $_GET['s'];
        }
        ?>

</span>
        <?php if(have_posts()){ ?>
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

        <?php }else echo "نتیجه ای یافت نشد!" ?>

        </div>

        <div class="col-md-12 text-center">
          <div class="pagination-box">
          <?php echo paginate_links() ?>
        
          </div>

   

      </div>
   
      
   
    </div>

</div>



<?php get_footer() ?>