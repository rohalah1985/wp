<?php get_header() ?>
<?php get_template_part("inc/page","baner"); ?>

   
      <div class="container">
        <div class="row ">
          
          <div class="page-content not-found ">
            <div class="col-md-3 "></div>
          <div class="col-md-6  text-center ">
          <span>404</span>
          <p>محتوای شما یافت نشد</p>
          <div class="search-box">
       
              <form action="<?php bloginfo('home') ?>"  method="get">
                <input type="text" name="s" placeholder="جستجو..."><button></button>
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
        
          </div>
      
        </div>
      </div>
    </div>

    
<?php get_footer() ?>

