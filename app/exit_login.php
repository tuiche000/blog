<?php
/**
 * Created by PhpStorm.
 * User: Rare
 * Date: 2017/7/26
 * Time: 10:04
 */
require "../includes/common.inc.php";
session_start();
session_destroy();
echo "<script>alert('退出成功');window.location.href='../index.php'</script>";
