<div class="wrap-main">
    <div class="title-main"><span><?=$titleMain?></span></div>

    <?=$flash->getMessages("frontend")?>



    <div class="doitac">
        <?php foreach($partner as $i){?>
        <div class="doitac-item">
            <a href="<?=$i['link']?>">

                <div class="doitac-img scale-img">
                    <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '250x150x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $i['photo'], 'alt' => 'img'])?>
                </div>
                <div class="doitac-heading">
                    <?=$i['name'.$lang]?>
                </div>
            </a>
        </div>
        <?php }?>
    </div>

</div>