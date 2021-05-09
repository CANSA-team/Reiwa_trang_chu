<?php
$content7 = setContent7();

?>
<div class="mg-doitac">
    <div class="bg-dt">
        <div class="container">
            <h1 class=" text-style-2" style="font-size: 35pt; margin-top: 50px; padding-bottom: 20px;"><i class="fas fa-quote-left" style="margin-top: 30px;"></i></h1>
            <div class="container">
                <span class="text-style-2" style="font-size: 15pt;">Chúng tôi bắt đầu với việc xác định vị trí, lựa chọn khái niệm, ý tưởng hoặc công năng thích hợp để từ đó tiến đến việc tuyển chọn đối tác phù hợp nhất cùng thực hiện dự án.</span>
                <div class="mg-doitac-1" style="padding-bottom: 50px;">
                    <?php foreach ($content7 as $value) : ?>
                        <img class="img-fluid staff-id" src="<?php echo $value['image'] ?>" alt="" width="50px" height="50px" style="margin-right: 10px; overflow: hidden; filter: brightness(1.1) contrast(0.96) saturate(1.37);" staff-id="<?php echo $value['id']?>">
                    <?php endforeach ?>
                    <div class="nhan-su__name"></div>
                </div>
            </div>


        </div>
    </div>

</div>