<?php
/**
 * Created by PhpStorm.
 * User: Rare
 * Date: 2017/7/26
 * Time: 16:02
 */
require "../includes/common.inc.php";
//创建一个空数组，用来存放提交过来的合法数据
$_clean = [];
$_clean['username'] = $_POST['register-username'];
$_clean['password'] = $_POST['register-password'];
print_r($_clean);

//新增之前，要判断用户名是否重复
$SELECT_sql = "SELECT username FROM user WHERE username='{$_clean['username']}'";
$SELECT_res = mysqli_query($conn,$SELECT_sql);
$SELECT_rows = mysqli_fetch_assoc($SELECT_res);
if($SELECT_rows){
    echo "<script>alert('对不起，此用户已被注册');window.location.href='../templates/register.php'</script>";
}
$INSERT_sql = "INSERT INTO user
(
  username,
  password,
  date
)VALUES
(
  '{$_clean['username']}',
  '{$_clean['password']}',
  NOW()
)";
$INSERT_res = mysqli_query($conn,$INSERT_sql);
$INSERT_rows = mysqli_fetch_assoc($INSERT_res);
mysqli_close($conn);
echo "<script>alert('注册成功！');window.location.href='../index.php'</script>";