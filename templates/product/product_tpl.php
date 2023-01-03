<div class="title-main"><span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span></div>
<div class="content-main w-clear">
    <div class="row danhmucsanpham">
        <div class="col-md-12">

            <?php if(!empty($product)) { foreach($product as $k => $v) { ?>
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
            <?php } } else { ?>
            <div class="col-12">
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?=khongtimthayketqua?></strong>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>