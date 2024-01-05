<?php
include_once __DIR__ . '/./inc/header.php';
$p_detail = isset($data['p_detail']) ? $data['p_detail'] : null;
$fm = new Format();
?>
<img style="height: 400px;" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_detail['image'] ?>" alt="" srcset="">
<?php echo $p_detail['name'] ?>
<?php echo $p_detail['price'] ?>
<?php echo $p_detail['view'] ?>
<br>


<?php
include_once __DIR__ . '/./inc/footer.php';
?>