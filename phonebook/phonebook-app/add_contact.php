<?php
require_once 'config.php';

// Xử lý dữ liệu từ biểu mẫu
if ($_SERVER['REQUEST_METHOD'] == 'POST'):
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];


    $sql = "INSERT INTO contacts_table (name, phone_number) VALUES ($name, $phone_number)";
    $conn->query($sql);

    header("Location: index.php");
    exit();
endif;
?>