<?php
$listContent1 =  setContent1();
?>
<!-- content1 -->
<div class="slideshow-container">

    <?php foreach ($listContent1 as $value) { ?>
        <div class="mySlides">
            <img src="<?php echo DEFAULT_IMG ?>" class="img-fluid" style="max-width: none; width:100%; height:400px; overflow: hidden; filter: brightness(1.1) contrast(0.96) saturate(1.37);">
            <div style="z-index: 10; position: absolute; width: 100%; text-align: center; top: 40%; color: red;">
                <span class="sider-text-color" style="text-transform: uppercase; font-size: 200%;"><?php echo $value['title'] ?></span>
            </div>
        </div>
    <?php } ?>
    <br>

    <div class="d-flex justify-content-center" style="cursor: pointer;">
        <?php
        for ($i = 1; $i <= count($listContent1); $i++) { ?>
            <span class="dot" onclick="currentSlide(<?php echo $i ?>)"></span>
        <?php } ?>
    </div>

</div>