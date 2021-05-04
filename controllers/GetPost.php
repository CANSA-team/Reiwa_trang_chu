<?php
require_once 'config/database.php';
require_once 'config/url.php';
spl_autoload_register(function ($class_name) {
    require 'models/' . $class_name . '.php';
});


if (isset($_GET['take'])) {

    echo getImgByCategoryId($_GET['take']);
}

function getImgByCategoryId($id)
{
    $sanPhamModel = new ProductModel();
    $sanphamList = $sanPhamModel->get_DauAnCongTrinh_By_CategoryID($id);
    $css = "";
    $str = "";
    $i = 0;
    foreach ($sanphamList as $item) {
        if ($i != 0) {
            $i = 1;
            $css = "repo-product";
        }

        $str .=    '<div class="col-md-3 col-xs-6 ">
        <div class="hieu_ung">

            <div class="noi_dung">
                <a href="'.URL_PAGE_DAU_AN_CONG_TRINH .  '&id=' . $item[$i]['id'].'">
                    <img src="'. DEFAULT_IMG .'" alt="" class="sp img-fluid" style="padding-top: 25px; height: 250px; width: 100%; overflow: hidden; filter: brightness(1.1) contrast(0.96) saturate(1.37);">

                    <div class="title">
                        <div class="thong_tin">'.$item[$i]['name'].'</div>
                    </div>
                </a>
            </div>


        </div>
</div>';
    }
    return $str;
}


?>