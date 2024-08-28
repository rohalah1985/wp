<?php get_header() ?>
  <body>

 

    <div class="page-baner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>عنوان صفحه</span> 
          </div>
        </div>
      </div>
    </div>

   
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

            </div>
          </div>
          <div class="col-md-3">
            <div class="search-box">
              <form action="">
                <input type="text" name="" placeholder="جستجو..."><button></button>
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
              <div class="side-bx">
                <span class="title">آخرین مطالب</span>
                <ul>
                  <li><a href="#">چاپگرها و متون بلکه روزنامه</a></li>
                  <li><a href="#">  با استفاده از طراحان گرافیک است</a></li>
                  <li><a href="#"> موجود در ارائه راهکارها</a></li>
                  <li><a href="#">تمام و دشواری موجود در ارائه راهکاره</a></li>
                  <li><a href="#">طراحی اساسا مورد استفاده قرار گیرد </a></li>
                </ul>
                
              </div>

              <div class="side-bx">
                <span class="title">بیشترین بازدید </span>
                <ul>
                  <li><a href="#">چاپگرها و متون بلکه روزنامه</a></li>
                  <li><a href="#">  با استفاده از طراحان گرافیک است</a></li>
                  <li><a href="#"> موجود در ارائه راهکارها</a></li>
                  <li><a href="#">تمام و دشواری موجود در ارائه راهکاره</a></li>
                  <li><a href="#">طراحی اساسا مورد استفاده قرار گیرد </a></li>
                </ul>
                
              </div>
          </div>
        </div>
    
      </div>
     

    
    </div>
   

    <?php get_footer() ?>