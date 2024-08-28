<?php get_header(); ?>


<?php get_template_part("inc/page","baner"); ?>

   
      <div class="container">
        <div class="row">
        
          <div class="page-content single-content d-flex">

          <div class="col-md-9">
            <div class="content-bx">
              <img src="<?php the_post_thumbnail_url() ?>" alt="">
              <div class="meta">
                <span ><i class="fa fa-clock-o"></i><?php echo get_the_date() ?> </span>
                <span ><i class="fa fa-comment-o"></i> <?php echo get_comments_number()  ?> </span>
                <span ><i class="fa fa-archive"></i><a href="#"><?php the_category(" , ") ?> </a></span>
                </div>
              <h1>  <?php the_title()  ?>  </h1><hr>
              <div class="p-text">
                <p>
                  <?php the_content() ?>
                </p>
              
              </div>
              <div class="post-tags">
             <?php the_tags() ?>
              </div>

              <div class="comments_box">
                <?php comments_template()  ?>
              </div>

            </div>
          </div>
          <?php get_sidebar() ?>
        </div>
      

      </div>


    
    </div>

  
<?php get_footer(); ?>
  

   
  

  

  