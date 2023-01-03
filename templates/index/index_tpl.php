<?php if(!empty($about)){?>
<div class="about">
    <div class="wrapper">
        <div class="aboutt">
            <div class="about__left hover_xam">
                <?=$func->getImage(['class' => 'w-100', 'sizes' => '492x452x1', 'upload' => UPLOAD_NEWS_L, 'image' => $about['photo'], 'alt' => $about['name'.$lang]])?>
            </div>
            <div class="about__right">
                <div class="about__title">
                    <span>
                        Đôi nét về
                    </span>
                </div>
                <div class="about__name">
                    <span>
                        <?=$about['name'.$lang]?>
                    </span>
                </div>
                <div class="about__desc">
                    <?=htmlspecialchars_decode($about['desc'.$lang])?>
                </div>
                <div class="about__btn">
                    <a href="gioi-thieu" class="text-decoration-none button button--greip"><span><span>Xem
                                Thêm</span></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<!-- -->
<div class="bestseller">
    <div class="wrapper">
        <div class="bestseller pd">
            <div class="heading__top">
                <div class="heading">
                    <div class="heading__icon">
                        <img src="assets/images/images/icon-heading-left.png" alt="">
                    </div>
                    <span>Best seller</span>
                    <div class="heading__icon">
                        <img src="assets/images/images/icon-heading-right.png" alt="">
                    </div>
                </div>
                <div class="heading__line">
                    <img src="assets/images/images/line-heading.png" alt="">
                </div>
            </div>
            <div class="bestseller__list">
                <?php if(!empty($probest)){?>
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="3:80" data-sm-items="3:80"
                    data-md-items="3:80" data-lg-items="3:80" data-xlg-items="3:80" data-rewind="1" data-autoplay="1"
                    data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                    data-autoplayspeed="3500" data-dots="1" data-nav="0"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-bestseller">
                    <?php foreach($probest as $k => $v) { ?>
                    <div>
                        <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"
                            class="text-decoration-none bestseller__item">
                            <div class="bestseller__img hover_xam">
                                <?= $func->getImage(['class' => 'w-100', 'sizes' => '315x322x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                            </div>
                            <span class="bestseller__name"><?=$v['name'.$lang]?></span>
                        </a>
                    </div>
                    <?php }?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="menu__index bg">
    <div class="img-item-01">
        <img src="assets/images/images/img-item-01.png" alt="">
    </div>
    <div class="wrapper">
        <div class="menu__indexx pd-bottom">
            <div class="heading__top">
                <div class="heading">
                    <div class="heading__icon">
                        <img src="assets/images/images/icon-heading-left.png" alt="">
                    </div>
                    <span>Menu</span>
                    <div class="heading__icon">
                        <img src="assets/images/images/icon-heading-right.png" alt="">
                    </div>
                </div>
                <div class="heading__line">
                    <img src="assets/images/images/line-heading.png" alt="">
                </div>
            </div>
            <div class="menu--index--list">
                <?php if (!empty($prolist)) {?>
                <?php foreach($prolist as $list) {
                $sanpham = $d->rawQuery("select name$lang, slugvi, slugen,photo,regular_price, id from #_product where id_list = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc",array($list['id'])); 
                ?>

                <div class="product__listnb-item">
                    <div class="prolist-left">
                        <div class="prolist-img hover_xam">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '500x387x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $list['photo'], 'alt' => $list['name' . $lang] ])?>
                        </div>

                    </div>
                    <div class="prolist-right">
                        <!--Bắt đầu danh sách sản phẩm c1 nb -->
                        <div class="prolist__heading font-size-heading">
                            <span><?=$list['name'.$lang]?></span>
                        </div>
                        <!--Kết thúc danh sách sản phẩm c1 nb -->
                        <div class="danhsachspcap1">
                            <?php foreach($sanpham as $i) { ?>
                            <div class="spcap1-item">
                                <a class="text-decoration-none" href="<?= $i[$sluglang] ?>"
                                    title="<?= $i['name' . $lang] ?>">

                                    <h3 class="spcap1-name cut_string1"><?= $i['name' . $lang] ?></h3>
                                    <span class="spcap1-price">
                                        <?=$func->formatMoney($i['regular_price'])?>
                                    </span>

                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- hết cấp 1 -->
                <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="videofb bg">
    <div class="wrapper">
        <div class="videofbb">
            <div class="feedbackd">
                <div class="heading__feedback">
                    <span>Cảm nhận khách hàng</span>
                </div>
                <?php if(!empty($feedback)){?>
                <div class="feedback__list">
                    <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="1:10"
                        data-md-items="1:10" data-lg-items="1:10" data-xlg-items="1:10" data-rewind="1"
                        data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                        data-smartspeed="700" data-autoplayspeed="3000" data-dots="0" data-nav="1"
                        data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                        data-navcontainer=".control-brand">
                        <?php foreach($feedback as $i){?>
                        <div>
                            <div class="feedback__item">
                                <div class="feedback__img--bg">
                                    <div class="feedback__img effect10">
                                        <?=$func->getImage(['class' => 'w-100', 'sizes' => '250x280x1', 'upload' => UPLOAD_NEWS_L, 'image' => $i['photo'], 'alt' => $i['name'.$lang]])?>
                                    </div>
                                </div>
                                <div class="feedback__card">
                                    <div class="feedback__content">
                                        <span>
                                            <?=$i['desc'.$lang]?>
                                        </span>
                                    </div>
                                    <div class="feedback__name">
                                        <span>
                                            <?=$i['name'.$lang]?>
                                        </span>
                                        <div class="fb-icon">
                                            <img src="assets/images/images/icon-fb.png" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>

                </div>
                <?php }?>
            </div>
            <div class="videod">

                <div class="video__list">
                    <div class="video-intro">
                        <?php if(!empty($videonb)){?>
                        <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="1:10"
                            data-md-items="1:10" data-lg-items="1:10" data-xlg-items="1:10" data-rewind="1"
                            data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                            data-smartspeed="700" data-autoplayspeed="3000" data-dots="0" data-nav="1"
                            data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                            data-navcontainer=".control-brand">
                            <?php foreach($videonb as $v){?>
                            <div>
                                <div class="video" data-fancybox="video" data-src="<?=$v['link_video']?>">
                                    <div class="video-image">
                                        <?=$func->getImage(['class' => 'lazy', 'sizes' => '500x420x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <div class="video__heading font-size-heading">
                    <span>video <?=$setting['name'.$lang]?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="album__index bg">
    <div class="wrapper">
        <div class="album--index--list">
            <div class="album__left">
                <div class="heading__album">
                    <span>
                        album ảnh
                    </span>
                </div>
                <?php if(!empty($thuvienanh[0])){?>
                <div class="album__item">
                    <a class="album__image effect10 text-decoration-none scale-img "
                        href="<?=$thuvienanh[0][$sluglang]?>" title="<?=$thuvienanh[0]['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '268x350x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[0]['photo'], 'alt' => $thuvienanh[0]['name'.$lang]])?>
                    </a>
                </div>
                <?php }?>
            </div>
            <div class="album__middle">
                <div class="album--middle--top">
                    <?php if(!empty($thuvienanh[1])){?>
                    <div class="album__item album__item--middle--top">
                        <a class="album__image effect10 text-decoration-none scale-img "
                            href="<?=$thuvienanh[1][$sluglang]?>" title="<?=$thuvienanh[1]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '360x353x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[1]['photo'], 'alt' => $thuvienanh[1]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                    <?php if(!empty($thuvienanh[2])){?>
                    <div class="album__item">
                        <a class="album__image effect10 text-decoration-none scale-img "
                            href="<?=$thuvienanh[2][$sluglang]?>" title="<?=$thuvienanh[2]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '212x212x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[2]['photo'], 'alt' => $thuvienanh[2]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                </div>
                <div class="album--middle--bottom">
                    <?php if(!empty($thuvienanh[3])){?>
                    <div class="album__item">
                        <a class="album__image effect10 text-decoration-none scale-img "
                            href="<?=$thuvienanh[3][$sluglang]?>" title="<?=$thuvienanh[3]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '212x212x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[3]['photo'], 'alt' => $thuvienanh[3]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                    <?php if(!empty($thuvienanh[4])){?>
                    <div class="album__item album__item--middle--bottom">
                        <a class="album__image effect10 text-decoration-none scale-img "
                            href="<?=$thuvienanh[4][$sluglang]?>" title="<?=$thuvienanh[4]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '290x260x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[4]['photo'], 'alt' => $thuvienanh[4]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>

                </div>
            </div>
            <div class="album__right">
                <?php if(!empty($thuvienanh[5])){?>
                <div class="album__item album__rightt">
                    <a class="album__image effect10 text-decoration-none scale-img "
                        href="<?=$thuvienanh[5][$sluglang]?>" title="<?=$thuvienanh[5]['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '285x460x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[5]['photo'], 'alt' => $thuvienanh[5]['name'.$lang]])?>
                    </a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<div class="blog bg">
    <div class="wrapper">
        <div class="blogg pd">
            <div class="heading__top">
                <div class="heading">
                    <div class="heading__icon">
                        <img src="assets/images/images/icon-heading-left.png" alt="">
                    </div>
                    <span>Tin tức</span>
                    <div class="heading__icon">
                        <img src="assets/images/images/icon-heading-right.png" alt="">
                    </div>
                </div>
                <div class="heading__line">
                    <img src="assets/images/images/line-heading.png" alt="">
                </div>
            </div>
            <?php if(!empty($newsnb)){?>
            <div class="blog__list">
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="3:80" data-sm-items="3:80"
                    data-md-items="3:80" data-lg-items="3:80" data-xlg-items="3:80" data-rewind="1" data-autoplay="1"
                    data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                    data-autoplayspeed="3500" data-dots="1" data-nav="0"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-bestseller">
                    <?php foreach($probest as $k => $v) { ?>
                    <div class="blog__item">
                        <div class="blog__img">
                            <?= $func->getImage(['class' => 'w-100', 'sizes' => '315x322x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>

                        </div>
                        <div class="blog__content">

                            <span class="bestseller__name"><?=$v['name'.$lang]?></span>
                            <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"
                                class="text-decoration-none blog__xemthem">

                            </a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="infor">
    <div class="wrapper">
        <div class="inforr">
            <div class="infor__item">
                <div class="infor__img">
                    <img src="assets/images/images/icon-phone2.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <div class="infor__content">
                    <a class="infor--title" href="tel:<?=$optsetting['hotline']?>">
                        <?=$func->formatPhone($optsetting['hotline'])?></a>
                    <?php if(!empty($openingtime)){?>
                    <span class="infor--desc">
                        <?=$openingtime['desc'.$lang]?>
                    </span>
                    <?php } ?>
                </div>
            </div>
            <div class="infor__item">
                <div class="infor__img">
                    <img src="assets/images/images/email02.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <div class="infor__content">
                    <span class="infor--title">
                        <?=$optsetting['email']?>
                    </span>
                    <span class="infor--desc">
                        Gửi thư cho chúng tội bất cứ lúc nào
                    </span>
                </div>
            </div>
            <div class="infor__item">
                <div class="infor__img">
                    <img src="assets/images/images/icon-phone2.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <div class="infor__content">
                    <span class="infor--title">
                        <?=$optsetting['address']?>
                    </span>
                    <span class="infor--desc">Địa chỉ liên hệ</span>

                </div>
            </div>
        </div>
    </div>
</div>