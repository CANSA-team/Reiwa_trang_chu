<?php
$content8 = setContent8();
?>
<div class="container" style="margin-top: 50px; margin-bottom: 50px;padding-bottom: 50px; height: 30%;">
        <div style="text-align: center;  margin-bottom: 25px;">
            <h1 class="mg-doitac-1" style="margin-bottom: 50px;">ĐỐI TÁC</h1>
        </div>
        <section class="customer-logos slider">
            <?php
            foreach ($content8 as $value) {
            ?>
            <div class="slide img-fluid"><img src="<?php echo $value['image'] ?>" style="overflow: hidden; filter: brightness(1.1) contrast(0.96) saturate(1.37);"></div>
            <?php
            }
            ?>
        </section>
    </div>

</script>