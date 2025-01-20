<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_control";

$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// الحصول على الاتجاه من المستخدم
if (isset($_GET['direction'])) {
    $direction = $_GET['direction'];

    // تحديث الاتجاه في قاعدة البيانات
    $sql = "UPDATE direction SET value = '$direction' WHERE id = 1";

    if ($conn->query($sql) === TRUE) {
        echo "Direction updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
