<?php
    /* Liên hệ */
    $nametype = "lienhe";
    $config['static'][$nametype]['title_main'] = "Liên hệ";
    $config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['static'][$nametype]['content'] = true;
    $config['static'][$nametype]['content_cke'] = true;

    /* Giới thiệu */
    $nametype = "gioi-thieu";
    $config['static'][$nametype]['title_main'] = "Giới thiệu";
    $config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['static'][$nametype]['images'] = true;
    $config['static'][$nametype]['name'] = true;
    $config['static'][$nametype]['desc'] = true;
    $config['static'][$nametype]['content'] = true;
    $config['static'][$nametype]['content_cke'] = true;
    $config['static'][$nametype]['seo'] = true;
    $config['static'][$nametype]['width'] = 500;
    $config['static'][$nametype]['height'] = 460;
    $config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* footer */
    $nametype = "footer";
    $config['static'][$nametype]['title_main'] = "Footer";
    $config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['static'][$nametype]['desc'] = true;
    $config['static'][$nametype]['desc_cke'] = true;

    /* Mô tả slide */
    $nametype = "desc-slide-show";
    $config['static'][$nametype]['title_main'] = "Mô tả slide";
    $config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['static'][$nametype]['desc'] = true;
    $config['static'][$nametype]['name'] = true;
    $config['static'][$nametype]['content'] = true;


?>