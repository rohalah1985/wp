

<div class="col-md-3">
            <div class="search-box">
              <form action="<?php bloginfo('home') ?>"  method="get">
                <input type="text" name="s" placeholder="جستجو..."><button></button>
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
            <?php if(is_active_sidebar('latest_post')){
        dynamic_sidebar('latest_post');
      }?>

<?php if(is_active_sidebar('cats_wig')){
        dynamic_sidebar('cats_wig');
      }?>

           
                
              </div>
          </div>


        