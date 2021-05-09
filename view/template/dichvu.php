<?php
$dv = setDichVu();
?>
<div class="container text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php
                for ($i = 0; $i < count($dv); $i += 4) :
                    $class = $i == 0 ? "bg-white carousel-item py-5 active" : "bg-white carousel-item py-5";
                ?>
                    <div class="<?php echo $class ?>">
                        <div class="row">
                            <?php foreach (array_slice($dv, $i, 4) as $value) : ?>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $value['name'] ?></h4>
                                            <img src="<?php if (empty($value['photo'])) {
                                                            echo DEFAULT_IMG;
                                                        } else {
                                                            echo $value['photo'];
                                                        } ?>" alt="<?php echo $value['name'] ?>" alt="">
                                            <a href="<?php echo URL_DICH_VU . '&id=' . $value['id'] ?>" class="btn btn-primary">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php endfor?>
            </div>
        </div>
    </div>

</div>