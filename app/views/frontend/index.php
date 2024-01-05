<?php
include_once __DIR__ . '/./inc/header.php';
$p_first =  $data['products_first'];
$p_view =  $data['products_view'];
$p_views =  $data['products_views'];
$p_hot_5s1 =  $data['products_hot_5s1'];
$p_hot_5s2 =  $data['products_hot_5s2'];
$p_hot_5s3 =  $data['products_hot_5s3'];
$p_hot_5s4 =  $data['products_hot_5s4'];

$fm = new Format();

?>



<body>
    <h1>sản phẩm mới</h1>

    <div class="flex-container">
        <?php
        if (isset($p_first)) {
            $count = 0;
            while ($p_assoc = $p_first->fetch_assoc()) {
        ?>
                <div><img src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_assoc['image'] ?>" alt="" srcset="">
                    <div>
                        <div>name: <?php echo $p_assoc['name'] ?></div>
                        <div>price: <?php echo $p_assoc['price'] ?></div>
                        <div>view: <?php echo $p_assoc['view'] ?></div>

                    </div>
                </div>


        <?php
            }
        }

        ?>



    </div>
    <h1>sản phẩm xem nhiều</h1>

    <div class="flex-container1">
        <?php
        if (isset($p_view)) {
            $count = 0;
            while ($p_assoc = $p_view->fetch_assoc()) {
                if ($count == 0) {
        ?>
                    <div><img style="width: 100%; height: 90%;" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_assoc['image'] ?>" alt="" srcset="">
                        <div>
                            <div>name: <?php echo $p_assoc['name'] ?></div>
                            <div>price: <?php echo $p_assoc['price'] ?></div>
                            <div>view: <?php echo $p_assoc['view'] ?></div>
                        </div>
                    </div>

        <?php
                }
                $count++;
            }
        }
        ?>
        <div>
            <?php
            if (isset($p_views)) {
                $count = 0;
                while ($p_assoc = $p_views->fetch_assoc()) {
                    if ($count > 0) {
            ?>
                        <div><img style="width: 100%; height: 80%;" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_assoc['image'] ?>" alt="" srcset="">
                            <div>
                                <div>name: <?php echo $p_assoc['name'] ?></div>
                                <div>price: <?php echo $p_assoc['price'] ?></div>
                                <div>view: <?php echo $p_assoc['view'] ?></div>
                            </div>
                        </div>

            <?php

                    }
                    $count++;
                }
            }
            ?>
        </div>

    </div>
    <h1>sản phẩm khuyến mãi</h1>

    <div class="flex-container2">
        <div class="container2_div1">
            <?php
            if (isset($p_hot_5s1)) {
                $count = 0;
                while ($p_assoc = $p_hot_5s1->fetch_assoc()) {
                    if ($count == 0) {
            ?>
                        <div style=" display: flex; background-image: url(<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_assoc['image'] ?>); background-size: cover; background-repeat: no-repeat ; background-position: center; ">
                            <div>
                                <div>name: <?php echo $p_assoc['name'] ?></div>
                                <div>price: <?php echo $p_assoc['price'] ?></div>
                                <div>view: <?php echo $p_assoc['view'] ?></div>
                            </div>
                        </div>
            <?php

                    }
                    $count++;
                }
            }
            ?>
            <div>
                <?php
                if (isset($p_hot_5s2)) {
                    $count = 0;
                    while ($p_assoc = $p_hot_5s2->fetch_assoc()) {
                        if ($count > 0 && $count <= 2) {
                ?>
                            <div style="background-image: url(<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_assoc['image'] ?>); background-size: cover; background-repeat: no-repeat ; background-position: center; ">
                                <div>
                                    <div>name: <?php echo $p_assoc['name'] ?></div>
                                    <div>price: <?php echo $p_assoc['price'] ?></div>
                                    <div>view: <?php echo $p_assoc['view'] ?></div>
                                </div>
                            </div>
                <?php

                        }
                        $count++;
                    }
                }
                ?>

            </div>
        </div>
        <div class="container2_div2">

            <div>

                <?php
                if (isset($p_hot_5s3)) {
                    $count = 0;
                    while ($p_assoc = $p_hot_5s3->fetch_assoc()) {
                        if ($count >= 3 && $count <= 4) {
                ?>
                            <div style="background-image: url(<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_assoc['image'] ?>); background-size: cover; background-repeat: no-repeat ; background-position: center; ">
                                <div>
                                    <div>name: <?php echo $p_assoc['name'] ?></div>
                                    <div>price: <?php echo $p_assoc['price'] ?></div>
                                    <div>view: <?php echo $p_assoc['view'] ?></div>
                                </div>
                            </div>
                <?php

                        }
                        $count++;
                    }
                }
                ?>
            </div>


            <div>
                <?php
                if (isset($p_hot_5s4)) {
                    $count = 0;
                    while ($p_assoc = $p_hot_5s4->fetch_assoc()) {
                        if ($count > 4) {
                ?>
                            <div style="background-image: url(<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_assoc['image'] ?>); background-size: cover; background-repeat: no-repeat ; background-position: center; ">
                                <div>
                                    <div>name: <?php echo $p_assoc['name'] ?></div>
                                    <div>price: <?php echo $p_assoc['price'] ?></div>
                                    <div>view: <?php echo $p_assoc['view'] ?></div>
                                </div>
                            </div>
                <?php

                        }
                        $count++;
                    }
                }
                ?>
            </div>
        </div>

    </div>

</body>
<?php
include_once __DIR__ . '/./inc/footer.php';
?>