<?php
include_once __DIR__ . '/./inc/header.php';
$p_data  = isset($data['products']) ? $data['products'] : null;
?>

<?php
if (isset($p_data)) {
    $count = 0;
    while ($p_assoc = $p_data->fetch_assoc()) {
?>
<br>
<?php echo $p_assoc['name'] ?>
<?php echo $p_assoc['price'] ?>
<?php echo $p_assoc['view'] ?>
<br>
<?php
    }
}

?>


<?php
include_once __DIR__ . '/./inc/footer.php';
?>