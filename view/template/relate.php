<div class="title_relate col-xs-12" style="margin-top: 50px;">
    <div class="title_right">
        <div class="title_center">
            <h3><span style="font-weight: bold;">Bài viết liên quan</span></h3>
        </div>
    </div>

</div>

<div class="des col-xs-12 text-justify" style="margin-top: 10px; ">
    <?php
    $arr = array_slice(setBar(), 0, 4);
    foreach ($arr as $value) :
    ?>
        <div class="a" style="margin-bottom: 5px;">
            <a href=""><?php echo $value['name'] ?></a>
        </div>
    <?php
    endforeach
    ?>
</div>