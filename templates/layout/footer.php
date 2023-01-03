<div class="footer pd">
    <div class="footer-article">
        <div class="wrapper">
            <div class="footerr">
                <div class="footer__item">
                    <span class="footer__item-title">Thông tin liên hệ</span>
                    <div class="footer__item--content">
                        <div class="footer__item-info">
                            <div class="footer__item-icon">
                                <img src="assets/images/images/icon-footer.png" alt="<?=$setting['name'.$lang]?>">
                            </div>
                            <span>
                                Địa chỉ: <?=$optsetting['address']?>
                            </span>
                        </div>
                        <div class="footer__item-info">
                            <div class="footer__item-icon">
                                <img src="assets/images/images/icon-footer-02.png" alt="<?=$setting['name'.$lang]?>">
                            </div>
                            <span>
                                Điện thoại: <a
                                    href="tel:<?=$optsetting['hotline']?>"><?=$func->formatPhone($optsetting['hotline'])?></a>
                            </span>
                        </div>
                        <div class="footer__item-info">
                            <div class="footer__item-icon">
                                <img src="assets/images/images/icon-footer-03.png" alt="<?=$setting['name'.$lang]?>">
                            </div>
                            <span>
                                Email: <?=$optsetting['email']?>
                            </span>
                        </div>
                        <div class="footer__item-info">
                            <div class="footer__item-icon">
                                <img src="assets/images/images/icon-footer-04.png" alt="<?=$setting['name'.$lang]?>">
                            </div>
                            <span>
                                Website: <?=$optsetting['website']?>
                            </span>
                        </div>
                    </div>
                    <span class="footer__item-title">follow us</span>

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
                <div class="footer__item">
                    <span class="footer__item-title">Chính sách</span>
                    <?php if(!empty($policy)){?>
                    <ul class=" chinhsach">
                        <?php foreach($policy as $v){?>
                        <li>
                            <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                        </li>
                        <?php }?>
                    </ul>
                    <?php }?>
                </div>

                <div class="footer__item">
                    <span class="footer__item-title">Form liên hệ</span>
                    <div class="footer__dk">
                        <form class="validation-newsletter" novalidate method="post" action=""
                            enctype="multipart/form-data">
                            <div class="newsletter-input">
                                <div class="form__icon">
                                    <img src="assets/images/images/icon-dk.png" alt="<?=$setting['name'.$lang]?>">
                                </div>
                                <input type="text" class="form-controld" id="fullname-newsletter"
                                    name="dataNewsletter[fullname]" placeholder="Họ Và tên: " required />
                                <div class="invalid-tooltip">Vui lòng nhập Họ và tên</div>
                            </div>
                            <div class="newsletter-input">
                                <div class="form__icon">
                                    <img src="assets/images/images/icon-dk-02.png" alt="<?=$setting['name'.$lang]?>">
                                </div>
                                <input type="number" class="form-controld" id="phone-newsletter"
                                    name="dataNewsletter[phone]" placeholder="Số điện thoại: " required />
                                <div class="invalid-tooltip">Vui lòng nhập Số điện thoại</div>
                            </div>
                            <div class="newsletter-input">
                                <div class="form__icon">
                                    <img src="assets/images/images/icon-dk-03.png" alt="<?=$setting['name'.$lang]?>">
                                </div>
                                <input type="email" class="form-controld" id="email-newsletter"
                                    name="dataNewsletter[email]" placeholder="Email: " required />
                                <div class="invalid-tooltip"><?= vuilongnhapdiachiemail ?></div>
                            </div>
                            <div class="newsletter-input">
                                <div class="form__icon">
                                    <img src="assets/images/images/icon-dk-04.png" alt="<?=$setting['name'.$lang]?>">
                                </div>
                                <input type="text" class="form-controld" id="content-newsletter"
                                    name="dataNewsletter[content]" placeholder="Nội dung: " required />
                                <div class="invalid-tooltip">Vui lòng nhập Nội dung</div>
                            </div>
                            <div class="newsletter-button">
                                <input type="submit" class="btn-f" name="submit-newsletter" value="ĐĂNG KÝ NGAY"
                                    disabled>
                                <input type="hidden" class="btn btn-sm btn-danger w-100"
                                    name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<div class="footer-copyright">
    <span>
        <span class="copyright__name">
            <?=$setting['name'.$lang]?>
        </span> All Rights Reserved. Designed by Nina Co.,Ltd
    </span>
</div>
<div class="footer__map">
    <div class="footer__fb">
        <div class="fb-page" data-href="<?=$optsetting['fanpage']?>" data-tabs="timeline" data-width="290"
            data-height="290" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false"
            data-show-facepile="true">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="<?=$optsetting['fanpage']?>">
                    <a href="<?=$optsetting['fanpage']?>">Facebook</a>
                </blockquote>
            </div>
        </div>
    </div>
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