<div class="footer_box">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="footer_menu">
            <span class="title">دسترسی سریع</span>
            <?php
wp_nav_menu([
    'theme_location' => 'footer_one',
    'depth' => '1',
])
?>

         </div>
        </div>
        <div class="col-md-3">
          <div class="footer_menu">
            <span class="title">دسترسی سریع</span>
            <?php
wp_nav_menu([
    'theme_location' => 'footer_two',
    'depth' => '1',
])
?>

         </div>
        </div>
        <div class="col-md-3">
          <div class="footer_menu">
            <span class="title">دسترسی سریع</span>
            <?php
wp_nav_menu([
    'theme_location' => 'footer_three',
    'depth' => '1',
])
?>

         </div>
        </div>
        <div class="col-md-3">


      <?php if (is_active_sidebar('footer_desc')) {
    dynamic_sidebar('footer_desc');
}?>

    <div class="">
    <?php wp_nav_menu([
    'theme_location' => 'footer_social',
    'depth' => '1',
    'menu_class' => 'd-inline-block p-2',
])?>

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

 <?php wp_footer();?>

  </body>
</html>
