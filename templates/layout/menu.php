<div class="menu">
    <div class="wrap-content">
        <div class="menuu">
            <?php if(!empty($logo)){?>
            <div class="header__logo">
                <a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition logo-menu" href=""
                    title="<?=trangchu?>">
                    <?=$func->getImage(['class' => '', 'sizes' => '92x92x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
                </a>
            </div>
            <?php }?>
            <ul class="menu__list">
                <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition menu__item" href=""
                        title="<?=trangchu?>">Trang chủ</a></li>

                <li><a class="<?php if($com=='ve-chung-toi') echo 'active'; ?> transition menu__item"
                        href="ve-chung-toi" title="Về chúng tôi">Về chúng tôi</a></li>

                <li><a class="<?php if($com=='du-an') echo 'active'; ?> transition menu__item" href="du-an"
                        title="Dự án">Dự án</a></li>

                <li><a class="<?php if($com=='dich-vu') echo 'active'; ?> transition menu__item" href="dich-vu"
                        title="Dịch vụ">Dịch vụ</a></li>

                <li>
                    <a class="<?php if($com=='san-pham') echo 'active'; ?> transition menu__item" href="san-pham"
                        title="<?=sanpham?>">Sản phẩm</a>
                    <?php if(count($splist)) { ?>
                    <ul>
                        <?php foreach($splist as $klist => $vlist) {
                                $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id'])); ?>
                        <li>
                            <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                                href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                            <?php if (!empty($spcat)) { ?>
                            <ul>
                                <?php foreach ($spcat as $kcat => $vcat) {
                                        $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                <li>
                                    <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>"
                                        href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                    <?php if (!empty($spitem)) { ?>
                                    <ul>
                                        <?php foreach ($spitem as $kitem => $vitem) {
                                                        $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>
                                        <li>
                                            <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>"
                                                href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                            <?php if (!empty($spsub)) { ?>
                                            <ul>
                                                <?php foreach ($spsub as $ksub => $vsub) { ?>
                                                <li>
                                                    <a class="transition" title="<?= $vsub['name' . $lang] ?>"
                                                        href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                            <?php } ?>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
                <li>
                    <a class="has-child <?php if($com=='bao-gia') echo 'active'; ?> transition menu__item"
                        href="bao-gia" title="Báo giá">Báo giá</a>
                </li>

                <li>
                    <a class="has-child <?php if($com=='tu-van') echo 'active'; ?> transition menu__item" href="tu-van"
                        title="Tư vấn">Tư vấn</a>
                </li>

                <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition menu__item" href="lien-he"
                        title="<?=lienhe?>"><?=lienhe?></a></li>
            </ul>

            <div class="search-res">
                <p class="icon-search transition"><i class="fa fa-search"></i></p>
                <div class="search-grid w-clear">
                    <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>"
                        onkeypress="doEnter(event,'keyword-res');" />
                    <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i></p>
                </div>
            </div>

        </div>
    </div>
</div>