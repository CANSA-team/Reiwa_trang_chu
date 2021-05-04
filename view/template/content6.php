<?php
$content6 = setContent6();
$productContent6 = $content6[0];
$postContent6 = $content6[1];
?>
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-6">
            <h1 style="margin-bottom: 20px; text-transform: uppercase;">THÔNG TIN HỮU ÍCH</h1>
            <a href="<?php echo URL_PAGE_DU_AN . '&id=' . $postContent6[0]['id'] ?>">
                <img src="
                <?php echo DEFAULT_IMG; ?>" alt="" class="img-fluid" style="max-width: 100%; width: auto; height: 315px; margin-bottom: 15px; overflow: hidden; filter: brightness(1.1) contrast(0.96) saturate(1.37);">

                <h5>
                    <?php echo $postContent6[0]['name'] ?> </h5>
            </a>
            <span style="margin-top: 15px;">
                <?php
                $str = strip_tags($postContent6[0]['description']);
                if (strlen($str) > 333) {
                    $str = substr($str, 0, 333) . '...';
                }
                echo $str; ?> </span><br>
            <div style="margin-bottom: 30px;">
                <span style="margin-right: 15px;"><i class="far fa-clock"></i>
                    <?php echo $postContent6[0]['date'] ?> </span>
            </div>


            <div>
                <?php
                for ($i = 1; $i <= 2; $i++) {
                ?>
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <img src="<?php echo DEFAULT_IMG; ?>" alt="" class="img-fluid" style="max-width: 100%; width: auto; height: 215px; overflow: hidden; filter: brightness(1.1) contrast(0.96) saturate(1.37);">
                        </div>
                        <div class="col-sm-8" style="margin-bottom: 20px;">
                            <a href="<?php echo URL_PAGE_DU_AN . '&id=' . $postContent6[$i]['id'] ?>">
                                <h5>
                                    <?php echo $postContent6[$i]['name'] ?>
                                </h5>
                            </a>
                            <span style="margin-top: 15px;">
                                <?php
                                $str = strip_tags($postContent6[$i]['description']);
                                if (strlen($str) > 333) {
                                    $str = substr($str, 0, 333) . '...';
                                }
                                echo $str; ?>
                            </span><br>
                            <div style="bottom: 0px; margin-top: 15px;">
                                <span style="margin-right: 15px;"><i class="far fa-clock"></i>
                                    <?php echo $postContent6[$i]['date'] ?> </span>
                                <br>
                            </div>

                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>


        <div class="col-md-6">
            <h1 style="margin-bottom: 20px; text-transform: uppercase;">GIẢI PHÁP THIẾT KẾ</h1>
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-md-6">
                    <img src="
                    <?php echo DEFAULT_IMG; ?>" alt="" style="max-width: 100%; width: auto; height: 315px; overflow: hidden; filter: brightness(1.1) contrast(0.96) saturate(1.37);">
                </div>
                <div class="col-sm-6" style="margin-bottom: 20px;">
                    <a href="<?php echo URL_PAGE_MAU_THIET_KE . '&id=' . $productContent6[0]['id'] ?>">
                        <h5>
                            <?php echo $productContent6[0]['name'] ?> </h5>
                    </a>
                    <span>
                        <?php
                        $str = strip_tags($productContent6[0]['description']);
                        if (strlen($str) > 333) {
                            $str = substr($str, 0, 333) . '...';
                        }
                        echo $str; ?></span><br>
                </div>
            </div>


            <div style="margin-top: 15px;">
                <div class="row" style="margin-top: 15px;">
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                    ?>
                        <div class="col-md-6" style="margin-bottom: 20px;">
                            <img src="<?php echo DEFAULT_IMG; ?>" alt="" class="img-fluid" style="max-width: 100%; width: auto; height: 215px; overflow: hidden; filter: brightness(1.1) contrast(0.96) saturate(1.37);">
                            <a href="<?php echo URL_PAGE_MAU_THIET_KE . '&id=' . $productContent6[$i]['id'] ?>">
                                <?php
                                $str = strip_tags($productContent6[$i]['description']);
                                if (strlen($str) > 333) {
                                    $str = substr($str, 0, 333) . '...';
                                }
                                echo $str; ?>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>