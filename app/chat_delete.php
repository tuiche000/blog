<?php
/**
 * Created by PhpStorm.
 * User: Rare
 * Date: 2017/8/10
 * Time: 11:32
 */

require "../includes/common.inc.php";

$txt = $_POST['strTxt'];
$sql = "DELETE FROM chat WHERE chat_id IN ($txt)";
$res = mysqli_query($conn,$sql);
mysqli_close($conn);
echo $txt;

