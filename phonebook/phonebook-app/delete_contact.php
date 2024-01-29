<?php
require_once 'config.php';

// Lấy ID của liên hệ cần xóa
$id = $_GET['id'];

// Xóa liên hệ khỏi cơ sở dữ liệu
$sql = "DELETE FROM contacts_table WHERE id = $id";
$conn->query($sql);

// Chuyển hướng người dùng đến trang danh sách liên hệ
header("Location: index.php");
exit();
?>