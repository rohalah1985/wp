<?php

function theme_widgets(){
    register_sidebar([
        'id'=> 'footer_desc',
        'name'=> 'ابزارک فوتر',
        "description" => "ابزارک توضیحات فوتر",
        'before_widget'=> '<div class="desc_footer footer_menu">',
        "after_widget" => " </div>",
        "before_title" => " <span class='title'>",
        "after_title" => "</span> "

    ]);

    register_sidebar([
        'id'=> 'latest_post',
        'name'=> 'ابزارک نمایش آخرین مطالب',
        "description" => "نمایش آخرین مطالب سایت",
        'before_widget'=> "<div class='side-bx'>",
        "after_widget" => " </div>",
        "before_title" => " <span class='title'>",
        "after_title" => "</span> "

    ]);

    register_sidebar([
        'id'=> 'cats_wig',
        'name'=> 'ابزارک نمایش دسته بندی ها ',
        "description" => "نمایش دسته بندی های  سایت",
        'before_widget'=> "<div class='side-bx'>",
        "after_widget" => " </div>",
        "before_title" => " <span class='title'>",
        "after_title" => "</span> "

    ]);
}

add_action('widgets_init', "theme_widgets");

?>