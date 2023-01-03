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
    $config['static'][$nametype]['width'] = 550;
    $config['static'][$nametype]['height'] = 330;
    $config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Slogan */
    $nametype = "slogan";
    $config['static'][$nametype]['title_main'] = "Slogan";
    $config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['static'][$nametype]['desc'] = true;


    /* Giờ mở cửa */
    $nametype = "opening-time";
    $config['static'][$nametype]['title_main'] = "Giờ mở cửa";
    $config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['static'][$nametype]['desc'] = true;
?>