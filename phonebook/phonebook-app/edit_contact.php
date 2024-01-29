<?php
require_once 'config.php';

// Lấy ID của liên hệ cần sửa
$id = $_GET['id'];

// Lấy dữ liệu từ biểu mẫu
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];

// Cập nhật thông tin liên hệ trong cơ sở dữ liệu
$sql = "UPDATE contacts_table SET
    name = '$name',
    phone_number = '$phone_number'
    WHERE id = $id";
$conn->query($sql);

// Chuyển hướng người dùng đến trang danh sách liên hệ
header("Location: index.php");
exit();
?>