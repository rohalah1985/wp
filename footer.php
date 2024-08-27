<div class="footer_box">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="footer_menu">
            <span class="title">دسترسی سریع</span>
            <?php
            wp_nav_menu([
              'theme_location'=> 'footer_one',
              'depth' => '1'
            ]) 
            ?>

         </div>
        </div>
        <div class="col-md-3">
          <div class="footer_menu">
            <span class="title">دسترسی سریع</span>
            <?php
            wp_nav_menu([
              'theme_location'=> 'footer_two',
              'depth' => '1'
            ]) 
            ?>

         </div>
        </div>
        <div class="col-md-3">
          <div class="footer_menu">
            <span class="title">دسترسی سریع</span>
            <?php
            wp_nav_menu([
              'theme_location'=> 'footer_three',
              'depth' => '1'
            ]) 
            ?>

         </div>
        </div>
        <div class="col-md-3">
          <div class="desc_footer footer_menu">
            <span class="title">دسترسی سریع</span>
            <p>
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود</p>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="copy-r text-center">
          <span>
            &copy; حق انتشار محفوظ است 2024
          </span>
        </div>
      </div>
    </div>
  </div>


  </div>
</div>

 <?php wp_footer(); ?> 

  </body>
</html>
