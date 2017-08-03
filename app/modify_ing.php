<?php
require "../includes/common.inc.php";

$id = $_POST['modify-id'];
$password = $_POST['modify-password'];
$sex = $_POST['modify-sex'];
$phone = $_POST['modify-phone'];
$email = $_POST['modify-email'];

$sql = "UPDATE user SET password='{$password}',sex='{$sex}',phone='{$phone}',email='{$email}' WHERE id={$id}";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('修改成功！')</script>";
} else {
    exit( "Error: " . $sql . "<br>" . $conn->error );
}
echo "<script>window.history.back()</script>";


?>
