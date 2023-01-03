<?php if(!empty($about)){?>
<div class="about pd">
    <div class="wrapper">
        <div class="aboutt">
            <div class="about__left">
                <div class="about__left-img">
                    <div class="scale-img hover_xam">
                        <?=$func->getImage(['class' => 'w-100', 'sizes' => '550x330x1', 'upload' => UPLOAD_NEWS_L, 'image' => $about['photo'], 'alt' => $about['name'.$lang]])?>
                    </div>
                </div>
            </div>
            <div class="about__right">
                <div class="about__title">
                    <span>
                        <?=$slogan['desc'.$lang]?>
                    </span>
                </div>
                <div class="about__name">
                    <span>
                        <?=$about['name'.$lang]?>
                    </span>
                </div>
                <div class="about__line"></div>
                <div class="about__desc">
                    <?=htmlspecialchars_decode($about['desc'.$lang])?>
                </div>
                <div class="about__btn">
                    <a href="gioi-thieu" class="button button--greip"><span><span>Xem thêm</span></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<!-- -->
<div class="tieuchi mr-top">
    <div class="wrapper">
        <div class="tieuchii pd">
            <?php if(!empty($tieuchi)){?>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="4:30" data-sm-items="4:30" data-md-items="4:30"
                data-lg-items="4:30" data-xlg-items="4:30" data-rewind="1" data-autoplay="1" data-loop="1"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-tieuchi">
                <?php foreach($tieuchi as $k => $v) { ?>
                <div class="tieuchi__item">
                    <div class="tieuchi__icon">
                        <?= $func->getImage(['class' => 'w-100', 'sizes' => '55x55x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                    </div>
                    <span class="tieuchi__name"><?=$v['name'.$lang]?></span>
                    <span class="tieuchi__desc"><?=$v['desc'.$lang]?></span>
                </div>
                <?php }?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="congtrinh">
    <div class="wrapper">
        <div class="congtrinh__top">
            <div class="heading">
                <span class="heading__name">
                    Công trình mẫu
                </span>
                <div class="heading__title">
                    <div class="heading__line"></div>
                    <span>
                        <?=$slogan['desc'.$lang]?>
                    </span>
                </div>
            </div>
            <?php if (!empty($congtrinhlist)) { ?>
            <div class="title-congtrinh-list text-center">
                <?php foreach ($congtrinhlist as $key => $vl) : ?>
                <a class="text-decoration-none a-title-congtrinh"
                    data-list="<?= $vl['id'] ?>"><?= $vl['name' . $lang] ?></a>
                <?php endforeach ?>
            </div>
            <?php } ?>
        </div>
        <div class="congtrinh__list">
            <?php if (!empty($congtrinh)) { ?>
            <div class="paging-congtrinh-list"></div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="dichvu">
    <div class="wrapper">
        <div class="dichvuu">
            <div class="heading">
                <span class="heading__name">
                    dịch vụ
                </span>
                <div class="heading__title">
                    <div class="heading__line"></div>
                    <span>
                        <?=$slogan['desc'.$lang]?>
                    </span>
                </div>
            </div>
        </div>
        <div class="dichvu__list">
            <?php if(!empty($dichvu)){?>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="3:20" data-sm-items="3:20" data-md-items="3:20"
                data-lg-items="3:20" data-xlg-items="3:20" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-dichvu">
                <?php foreach($dichvu as $k => $v) { ?>
                <div class="dichvu__item">
                    <a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                        <div class="dichvu__img scale-img effect10">
                            <?= $func->getImage(['class' => 'w-100', 'sizes' => '590x390x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                        </div>
                        <div class="dichvu__name">
                            <span><?=$v['name'.$lang]?></span>
                        </div>
                    </a>
                </div>
                <?php }?>
            </div>
            <?php }?>
        </div>
    </div>
</div>

<div class="baogia mr-top">
    <div class="wrapper">
        <div class="baogiaa pd">
            <div class="heading">
                <span class="heading__name">
                    báo giá
                </span>
                <div class="heading__title">
                    <div class="heading__line"></div>
                    <span>
                        <?=$slogan['desc'.$lang]?>
                    </span>
                </div>
            </div>
            <div class="baogia__list">
                <?php if(!empty($baogia)){?>
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="4:20" data-sm-items="4:20"
                    data-md-items="4:20" data-lg-items="4:20" data-xlg-items="4:20" data-rewind="1" data-autoplay="1"
                    data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="700"
                    data-autoplayspeed="3000" data-dots="0" data-nav="0"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-baogia">
                    <?php foreach($baogia as $k => $v) { ?>
                    <div class="baogia__item">
                        <a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                            <div class="baogia__img">
                                <img src="assets/images/images/icon-baogia.png" alt="<?=$setting['name'.$lang]?>">
                            </div>
                            <div class="baogia__name">
                                <span><?=$v['name'.$lang]?></span>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<div class="blog pd">
    <div class="wrapper">
        <div class="blogg">
            <div class="heading">
                <span class="heading__name">
                    tin tức mới
                </span>
                <div class="heading__title">
                    <div class="heading__line"></div>
                    <span>
                        <?=$slogan['desc'.$lang]?>
                    </span>
                </div>
            </div>
            <?php if(!empty($newsnb)){?>
            <div class="blog__list">
                <div class="blog__left">
                    <?php if(!empty($newsnb[0])){?>
                    <div class="blog__left--item">
                        <a class="text-decoration-none" href="<?=$newsnb[0][$sluglang]?>"
                            title="<?=$newsnb[0]['name'.$lang]?>">
                            <div class="blog__left--img scale-img effect10">
                                <?= $func->getImage(['class' => 'w-100', 'sizes' => '380x240x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[0]['photo'], 'alt' => $newsnb[0]['name'.$lang]]) ?>
                            </div>
                            <div class="blog__left--content">
                                <span class="blog__left--name">
                                    <?=$newsnb[0]['name'.$lang]?>
                                </span>
                                <span class="blog__left--desc">
                                    <?=$newsnb[0]['desc'.$lang]?>
                                </span>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                    <?php if(!empty($newsnb[1])) {?>
                    <div class="blog__left--item">
                        <a class="text-decoration-none" href="<?=$newsnb[1][$sluglang]?>"
                            title="<?=$newsnb[1]['name'.$lang]?>">
                            <div class="blog__left--img scale-img effect10">
                                <?= $func->getImage(['class' => 'w-100', 'sizes' => '380x240x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[1]['photo'], 'alt' => $newsnb[1]['name'.$lang]]) ?>
                            </div>
                            <div class="blog__left--content">
                                <span class="blog__left--name">
                                    <?=$newsnb[1]['name'.$lang]?>
                                </span>
                                <span class="blog__left--desc">
                                    <?=$newsnb[1]['desc'.$lang]?>
                                </span>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                </div>
                <div class="blog__right">
                    <div class="slick-tieuchi">
                        <?php for ($i=2; $i <= count($newsnb); $i++) { ?>
                        <div>
                            <?php if(!empty($newsnb[$i])){?>
                            <div class="blog__right--item">
                                <a class="text-decoration-none" href="<?=$newsnb[$i][$sluglang]?>">
                                    <div class="blog__right--img scale-img effect10">
                                        <?= $func->getImage(['class' => 'w-100', 'sizes' => '140x110x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[$i]['photo'], 'alt' => $newsnb[$i]['name'.$lang]]) ?>
                                    </div>
                                    <div class="blog__right--content">
                                        <span class="blog__right--name">
                                            <?=$newsnb[$i]['name'.$lang]?>
                                        </span>
                                        <span class="blog__right--desc">
                                            <?=$newsnb[$i]['desc'.$lang]?>
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <?php }?>
                        </div>
                        <?php }?>
                    </div>
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