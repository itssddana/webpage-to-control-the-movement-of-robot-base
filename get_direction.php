<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_control";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استرجاع آخر قيمة للاتجاه بناءً على أحدث إدخال
$sql = "SELECT value FROM direction ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // عرض الاتجاه الحالي
    $row = $result->fetch_assoc();
    echo "Current Direction: " . $row["value"];
} else {
    echo "No direction found in the database.";
}

// إغلاق الاتصال
$conn->close();
?>
