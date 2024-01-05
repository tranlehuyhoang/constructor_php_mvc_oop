<?php
include_once __DIR__ . '/./inc/header.php';
$p_detail = isset($data['p_detail']) ? $data['p_detail'] : null;
$fm = new Format();
?>
<?php echo $p_detail['name'] ?>
<?php echo $p_detail['price'] ?>
<?php echo $p_detail['old_price'] ?>
<br>


<?php
include_once __DIR__ . '/./inc/footer.php';
?>