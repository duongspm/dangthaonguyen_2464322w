<?php 
    include "config.php";
	$map = $_POST['map'];
    $googlemap = $cache->get("select desc$lang,id from #_news where type = ? and id=? and find_in_set('hienthi',status)", array('chi-nhanh',$map), 'fetch', 7200);
?>

<?= htmlspecialchars_decode($googlemap['desc'.$lang]) ?>