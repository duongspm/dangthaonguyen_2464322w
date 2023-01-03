<div class="grid-pro-detail w-clear">
    <div class="row">
        <div class="left-pro-detail col-md-6 col-lg-5 mb-4">
            <a id="Zoom-1" class="MagicZoom"
                data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;"
                href="<?= ASSET . THUMBS ?>/540x540x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>"
                title="<?= $rowDetail['name' . $lang] ?>">
                <?= $func->getImage(['isLazy' => false, 'sizes' => '540x540x1',  'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
            </a>
            <?php if ($rowDetailPhoto) {
                if (count($rowDetailPhoto) > 0) { ?>
            <div class="gallery-thumb-pro">
                <div class="owl-page owl-carousel owl-theme owl-pro-detail" data-xsm-items="5:10" data-sm-items="5:10"
                    data-md-items="5:10" data-lg-items="5:10" data-xlg-items="5:10" data-nav="1"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>"
                    data-navcontainer=".control-pro-detail">
                    <div>
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1"
                            href="<?= ASSET . THUMBS ?>/540x540x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>"
                            title="<?= $rowDetail['name' . $lang] ?>">
                            <?= $func->getImage(['isLazy' => false, 'sizes' => '540x540x1',  'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                        </a>
                    </div>
                    <?php foreach ($rowDetailPhoto as $v) { ?>
                    <div>
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1"
                            href="<?= ASSET . THUMBS ?>/540x540x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>"
                            title="<?= $rowDetail['name' . $lang] ?>">
                            <?= $func->getImage(['isLazy' => false, 'sizes' => '540x540x1',  'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <div class="control-pro-detail control-owl transition"></div>
            </div>
            <?php }
            } ?>
        </div>

        <div class="right-pro-detail col-md-6 col-lg-7 mb-4">
            <p class="title-pro-detail mb-2"><?= $rowDetail['name' . $lang] ?></p>

            <div class="social-plugin social-plugin-pro-detail w-clear">
                <?php
                $params = array();
                $params['oaid'] = $optsetting['oaidzalo'];
                echo $func->markdown('social/share', $params);
                ?>
            </div>

            <ul class="attr-pro-detail">
                <?php if (!empty($rowDetail['code'])) { ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= masp ?>:</label>
                    <div class="attr-content-pro-detail"><?= $rowDetail['code'] ?></div>
                </li>
                <?php } ?>
                <?php if (!empty($productBrand['id'])) { ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= thuonghieu ?>:</label>
                    <div class="attr-content-pro-detail"><a class="text-decoration-none"
                            href="<?= $productBrand[$sluglang] ?>"
                            title="<?= $productBrand['name' . $lang] ?>"><?= $productBrand['name' . $lang] ?></a></div>
                </li>
                <?php } ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= gia ?>:</label>
                    <div class="attr-content-pro-detail">
                        <?php if ($rowDetail['sale_price']) { ?>
                        <span class="price-new-pro-detail"><?= $func->formatMoney($rowDetail['sale_price']) ?></span>
                        <span class="price-old-pro-detail"><?= $func->formatMoney($rowDetail['regular_price']) ?></span>
                        <?php } else { ?>
                        <span
                            class="price-new-pro-detail"><?= ($rowDetail['regular_price']) ? $func->formatMoney($rowDetail['regular_price']) : lienhe ?></span>
                        <?php } ?>
                    </div>
                </li>
                <div class="desc-pro-detail">
                    <?= (!empty($rowDetail['desc' . $lang])) ? nl2br(htmlspecialchars_decode($rowDetail['desc' . $lang])) : '' ?>
                </div>
                <?php if (!empty($rowColor)) { ?>
                <li class="color-block-pro-detail w-clear">
                    <label class="attr-label-pro-detail d-block"><?= mausac ?>:</label>
                    <div class="attr-content-pro-detail d-block">
                        <?php foreach ($rowColor as $k => $v) { ?>
                        <?php if ($v['type_show'] == 1) { ?>
                        <label for="color-pro-detail-<?= $v['id'] ?>" class="color-pro-detail text-decoration-none"
                            data-idproduct="<?= $rowDetail['id'] ?>"
                            style="background-image: url(<?= UPLOAD_COLOR_L . $v['photo'] ?>)">
                            <input type="radio" value="<?= $v['id'] ?>" id="color-pro-detail-<?= $v['id'] ?>"
                                name="color-pro-detail">
                        </label>
                        <?php } else { ?>
                        <label for="color-pro-detail-<?= $v['id'] ?>" class="color-pro-detail text-decoration-none"
                            data-idproduct="<?= $rowDetail['id'] ?>" style="background-color: #<?= $v['color'] ?>">
                            <input type="radio" value="<?= $v['id'] ?>" id="color-pro-detail-<?= $v['id'] ?>"
                                name="color-pro-detail">
                        </label>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </li>
                <?php } ?>
                <?php if (!empty($rowSize)) { ?>
                <li class="size-block-pro-detail w-clear">
                    <label class="attr-label-pro-detail d-block"><?= kichthuoc ?>:</label>
                    <div class="attr-content-pro-detail d-block">
                        <?php foreach ($rowSize as $k => $v) { ?>
                        <label for="size-pro-detail-<?= $v['id'] ?>" class="size-pro-detail text-decoration-none">
                            <input type="radio" value="<?= $v['id'] ?>" id="size-pro-detail-<?= $v['id'] ?>"
                                name="size-pro-detail">
                            <?= $v['name' . $lang] ?>
                        </label>
                        <?php } ?>
                    </div>
                </li>
                <?php } ?>

                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= luotxem ?>:</label>
                    <div class="attr-content-pro-detail"><?= $rowDetail['view'] ?></div>
                </li>
            </ul>

        </div>
    </div>

    <div class="tags-pro-detail w-clear">
        <?php if (!empty($rowTags)) {
            foreach ($rowTags as $v) { ?>
        <a class="btn btn-sm btn-danger rounded" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><i
                class="fas fa-tags"></i><?= $v['name' . $lang] ?></a>
        <?php }
        } ?>
    </div>

    <div class="tabs-pro-detail">
        <ul class="nav nav-tabs" id="tabsProDetail" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="info-pro-detail-tab" data-toggle="tab" href="#info-pro-detail"
                    role="tab"><?= thongtinsanpham ?></a>
            </li>

        </ul>
        <div class="tab-content pt-4 pb-4" id="tabsProDetailContent">
            <div class="tab-pane fade show active" id="info-pro-detail" role="tabpanel">
                <?= htmlspecialchars_decode($rowDetail['content' . $lang]) ?>
            </div>
            <div class="tab-pane fade" id="commentfb-pro-detail" role="tabpanel">
                <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3"
                    data-colorscheme="light" data-width="100%"></div>
            </div>
        </div>
    </div>


</div>

<div class="title-main"><span><?= sanphamcungloai ?></span></div>
<div class="content-main w-clear">

    <?php if (!empty($product)) {
            foreach ($product as $k => $v) { ?>
    <div class="product">
        <a class="box-product text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
            <p class="pic-product scale-img effect10">
                <?=$func->getImage(['sizes' => '270x270x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
            </p>
            <h3 class="name-product text-split"><?=$v['name'.$lang]?></h3>
            <p class="price-product">
                <span class="price-price">
                    Giá:
                </span>
                <?php if($v['discount']) { ?>
                <span class="price-new"><?=$func->formatMoney($v['sale_price'])?></span>
                <span class="price-old"><?=$func->formatMoney($v['regular_price'])?></span>
                <span class="price-per"><?='-'.$v['discount'].'%'?></span>
                <?php } else { ?>
                <span
                    class="price-new"><?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : "Liên hệ: " . $func->formatPhone($optsetting['hotline'])?></span>
                <?php } ?>
            </p>
        </a>

    </div>
    <?php }
        } else { ?>
    <div class="col-12">
        <div class="alert alert-warning w-100" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
    </div>
    <?php } ?>



    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
</div>