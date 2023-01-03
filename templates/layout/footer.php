<div class="footer ">
    <div class="footer-article">
        <div class="wrapper">
            <div class="footerr pd">
                <div class="footer__item">
                    <span class="footer__item-title">Thông tin liên hệ</span>
                    <div class="footer__item--content">
                        <div class="footer__item-info">
                            <span>
                                <?=htmlspecialchars_decode($footer['desc'.$lang])?> </span>
                        </div>
                    </div>
                    <div class="social-footer">
                        <?php if(!empty($social)){
                            foreach($social as $v){?>
                        <div class="social-item">
                            <a href="<?=$v['link']?>">
                                <?=$func->getImage(['class' => '', 'sizes' => '25x25x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                            </a>
                        </div>
                        <?php }}?>
                    </div>
                </div>
                <div class="footer__item footer__item--middle">
                    <a href="" title="<?=trangchu?>" class="scale-img">
                        <?=$func->getImage(['sizes' => '260x240x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logofooter['photo'], 'alt' => $setting['name'.$lang]])?>
                    </a>
                </div>
                <div class="footer__item footer__item--right">
                    <span class="footer__item-title">Kết nối với chúng tôi</span>
                    <div class="footer__fb">
                        <div class="fb-page" data-href="<?=$optsetting['fanpage']?>" data-tabs="timeline"
                            data-width="530" data-height="130" data-small-header="true"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="<?=$optsetting['fanpage']?>">
                                    <a href="<?=$optsetting['fanpage']?>">Facebook</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <span>
            <span class="copyright__name animate__ animate__fadeInLeft wow animated">
                © Bản quyền thuộc
                <?=$setting['name'.$lang]?>
            </span>. Thiết kế web: Nina.vn
        </span>
    </div>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<div class="footer__map">
    <?php if(!empty($optsetting['coords_iframe'])){?>
    <?= $addons->set('footer-map', 'footer-map', 6); ?>
    <?php }?>
</div>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png.webp', 'alt' => 'Hotline']) ?></i>
</a>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png.webp', 'alt' => 'Zalo']) ?></i>
</a><i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png.webp', 'alt' => 'Zalo']) ?></i>
</a>