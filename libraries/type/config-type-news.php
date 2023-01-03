<?php
    /* Feedback */
    $nametype = "feedback";
    $config['news'][$nametype]['title_main'] = "Feedback";
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['width'] = 360;
    $config['news'][$nametype]['height'] = 340;
    $config['news'][$nametype]['thumb'] = '360x340x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Tin tức */
    $nametype = "tin-tuc";
    $config['news'][$nametype]['title_main'] = "Tin tức";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['comment'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 450;
    $config['news'][$nametype]['height'] = 610;
    $config['news'][$nametype]['thumb'] = '450x610x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Chính sách */
    // $nametype = "chinh-sach";
    // $config['news'][$nametype]['title_main'] = "Chính sách";
    // $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    // $config['news'][$nametype]['view'] = true;
    // $config['news'][$nametype]['slug'] = true;
    // $config['news'][$nametype]['copy'] = true;
    // $config['news'][$nametype]['desc'] = true;
    // $config['news'][$nametype]['content'] = true;
    // $config['news'][$nametype]['content_cke'] = true;
    // $config['news'][$nametype]['seo'] = true;

    /* Quản lý mục (Không cấp) */
    if (isset($config['news'])) {
        foreach ($config['news'] as $key => $value) {
            if (!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false)) {
                $config['shownews'] = 1;
                break;
            }
        }
    }
?>