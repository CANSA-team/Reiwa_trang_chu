<?php
$page = setPage();
if (!empty($page['view_count'])) {
    Model::updatePostView($page['id'], $page['view_count'] + 1);
} else {
    Model::updateProductView($page['id'], $page['view'] + 1);
}
getHeader();
?>
<div id="content" class="full_width posts">
    <div class="container detail_post">
        <?php
        $check = $page['id_classify'] == 3;
        if ($check) {
            getDichVu();
        }
        ?>
        <div class="row fix-safari">
            <div class="col-xs-12 col-md-8 col-lg-9">
                <article class="box_content read bg_white m-t-12">
                    <div class="title_page col-xs-12">
                        <div class="title_right">
                            <div class="title_center">
                                <span class="uppercaseText" style="font-weight: bold; text-transform: uppercase;"><?php echo $page['name'] ?></span>
                            </div> <!--  end .title_center -->
                        </div> <!--  end .title_right -->
                    </div> <!--  end .title -->
                    <div class="des col-xs-12 text-justify" style="margin-top: 20px;">
                        <!-- content -->
                        <?php echo $page['description'] ?>
                    </div> <!--  end .des -->
                    <?php
                    getRelate();
                    ?>
                </article> <!--  end .box_content -->
            </div>
            <?php
            getBar();
            ?>
        </div>
    </div> <!--  end .container -->
</div>
<?php
getFooter();
?>