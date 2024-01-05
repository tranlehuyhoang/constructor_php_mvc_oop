<?php
include_once __DIR__ . '/./inc/header.php';
$p_first =  $data['products_first'];

$fm = new Format();

?>
<?php
if (isset($p_first)) {
    $count = 0;
    while ($p_assoc = $p_first->fetch_assoc()) {
?>
<br>
<?php echo $p_assoc['name'] ?>
<?php echo $p_assoc['price'] ?>
<?php echo $p_assoc['old_price'] ?>
<br>
<?php
    }
}

?>

<?php
include_once __DIR__ . '/./inc/footer.php';
?>