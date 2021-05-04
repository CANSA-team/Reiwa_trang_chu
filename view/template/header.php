<?php
$title = setHeader();
$contactModel = new ContactModel();
$contact = $contactModel->getContact();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/all.min.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/slick-theme.css">
    <link rel="stylesheet" href="./public/css/slick.css">
    <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./public/css/animate.css">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="/public/images/ReiwaHouse_logo_final.svg">
    <script src="./public/js/jquery.js"></script>
    <script src="./public/js/stick.js"></script>
</head>

<body>
    <!-- Top -->
    <div class="container">
        <div class="top-style border-bottom">
            <div class="row">
                <div class="col-md-9 d-flex align-items-center">
                    <div class="top-contact w-100">
                        <div class="row">
                            <div class="col-md-6">
                                <span>
                                    <i class="fas fa-mobile-alt"></i>
                                    Hotline:
                                    <a href="tel:<?php echo $contact[4]['link'] ?>"><?php echo $contact[4]['link'] ?></a>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <span>
                                    <i class="fas fa-envelope"></i>
                                    Email:
                                    <a href="mailto:<?php echo $contact[3]['link'] ?>"><?php echo $contact[3]['link'] ?></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <form action="" method="GET" class="form-inline my-2 my-lg-0" style="right: 0px;">
                        <div class="top-search-all">
                            <input type="text" name="action" value="post" hidden>
                            <input type="text" name="type" value="search" hidden>
                            
                            <input class="top-search" id="search-input" type="search" name="value" placeholder="Tìm Kiếm" aria-label="Search">
                            <button class="top-btn-search" id="action-search" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  

    <!-- Nav -->
    <nav class="navbar navbar-expand-sm navbar-light bg-white sticky-top pos-nav">
        <div class="container">
            <a class="navbar-brand" href="<?php echo URL_TRANG_CHU ?>"><img src="<?php echo DEFAULT_IMG ?>" alt="logo" width="150" height="100" class="img-fluid"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ul-item ul-all" style="padding-right: 50px;">
                    <?php
                    echo getNavBar();
                    ?>
                </ul>
            </div>
        </div>
    </nav>