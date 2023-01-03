<?php
/* Sản phẩm */
$nametype = "san-pham";
$config['product'][$nametype]['title_main'] = "Sản phẩm";
$config['product'][$nametype]['dropdown'] = true;
$config['product'][$nametype]['list'] = true;
$config['product'][$nametype]['cat'] = true;
$config['product'][$nametype]['item'] = true;

$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['regular_price'] = true;
$config['product'][$nametype]['copy_image'] = true;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh sản phẩm",
        "title_sub_photo" => "Hình ảnh",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 3,
        "images_photo" => true,
        "cart_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 320,
        "height_photo" => 350,
        "thumb_photo" => '320x350x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
    ),
);
$config['product'][$nametype]['code'] = false;
$config['product'][$nametype]['desc'] = true;
$config['product'][$nametype]['schema'] = true;
$config['product'][$nametype]['content'] = true;
$config['product'][$nametype]['content_cke'] = true;
$config['product'][$nametype]['seo'] = true;
//Nhân 2 hoặc 3,... tùy thuộc vào bức ảnh lớn hay nhỏ VD:(270*2), tự tính nhẩm trong đầu
$config['product'][$nametype]['width'] = 265;
$config['product'][$nametype]['height'] = 232;
$config['product'][$nametype]['thumb'] = '265x232x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

 // /* (List) */
$config['product'][$nametype]['title_main_list'] = "Sản phẩm cấp 1";
$config['product'][$nametype]['slug_list'] = true;
$config['product'][$nametype]['check_list'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");

/* Sản phẩm (Cat) */
$config['product'][$nametype]['title_main_cat'] = "Sản phẩm cấp 2";
$config['product'][$nametype]['slug_cat'] = true;
$config['product'][$nametype]['check_cat'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");

/* Sản phẩm (Item) */
$config['product'][$nametype]['title_main_item'] = "Sản phẩm cấp 3";
$config['product'][$nametype]['slug_item'] = true;
$config['product'][$nametype]['check_item'] = array("hienthi" => "Hiển thị");
?>