<?php
require_once '../config/database.php';
spl_autoload_register(function ($class_name) {
    require '../models/' . $class_name . '.php';
});


if (isset($_POST['staff-id'])) {
    $staff = new NhanSuModel();
    echo '{"name": "'.$staff->getNhanSuByID($_POST['staff-id'])[0]['name'].'"}';
    // echo json_encode($staff->getNhanSuByID($_POST['staff-id']));
}

