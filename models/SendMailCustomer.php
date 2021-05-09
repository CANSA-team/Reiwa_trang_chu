<?php
require '../config/database.php';
require '../config/config.php';
spl_autoload_register(function ($class_name) {
    require  $class_name . '.php';
});

if (!isset($_COOKIE['mail'])) {
    $nguoiNhan = $_POST['email'];
    $subject = $_POST['name'];
    $fromName = $_POST['phone'];
    $noiDung = $_POST['content'];
    $customerModel = new CustomerModel();
    $customerModel->insertKhachHang($_POST);
    TienIch::sendEmail($nguoiNhan, $fromName, $subject, $noiDung);
    setcookie('mail', true, time() + (60 * 60 * 24));
    echo json_encode(["result"=>true]);
    return;
}

echo json_encode(["result"=>false]);