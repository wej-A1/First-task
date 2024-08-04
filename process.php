<?php
$servername = "localhost";
$username = "root"; // اسم المستخدم الافتراضي لـ MySQL في XAMPP هو root
$password = ""; // كلمة المرور الافتراضية لـ MySQL في XAMPP هي فارغة
$dbname = "actions1"; // استبدل بـ اسم قاعدة البيانات التي أنشأتها

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// فحص الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
echo "تم الاتصال بنجاح";
?>
