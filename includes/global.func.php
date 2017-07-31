<?php
/**
 * Created by PhpStorm.
 * User: Rare
 * Date: 2017/3/8
 * Time: 10:48
 */

/**
 *_runtime()是用来执行耗时
 *@access public 表示函数对外公开
 *@return float 表示返回出来的是一个浮点型数字
*/
function _runtime(){
    $_mtime = explode(' ',microtime());
    return $_mtime[1] + $_mtime[0];
}


/*
    _html()函数表示对字符串进行HTML过滤显示，如果是数组按数组的方式进行过滤。
    如果是单独的字符串，那么就按单独的字符串过滤。
*/
function _html($str){
    if(is_array($str)){
        foreach ($str as $key => $val){
            $str[$key] = _html($val); //这里采用了递归
        }
    }else{
        $str = htmlspecialchars($str);
    }
    return $str;
}


//JS弹窗函数
function _alert_back($_info){
    echo "<script>alert('$_info');history.back();</script>";
    exit();
}

function _location($_info,$_url){
    echo "<script>alert('$_info');location.href='$_url';</script>";
    exit();
}

function _sha1_uniqid(){
    return _mysql_string(sha1(uniqid(rand(),true)));
}

/**
 * _check_code void 验证码比对
 * @param $_first_code
 * @param $_end_code
 */
function _check_code($_first_code,$_end_code){
    if($_first_code != $_end_code){
        _alert_back('验证码错误！');
    }
}

//字符串转义函数
function _mysql_string($_str){
//    get_magic_quotes_gpc()如果开启状态，那么久不需要转义
    if(!GPC){
        return addslashes($_str);
    }
    return $_str;

}

/**
 *_code()函数是验证码函数
 * @access public
 * @param int $_width表示验证码的长度
 * @param int $_height表示验证码的高度
 * @param int $_rnd_code表示验证码的位数
 * @param bool $_flag表示验证码是否需要边框
 * @return void 这个函数执行后产生一个验证码
 */
function _code($_width=75,$_height=25,$_rnd_code=4,$_flag=false){
    //随机码的个数
//    $_rnd_code=4;

//创建随机码
    $_random='';
    for($i=0;$i<$_rnd_code;$i++){
        $_random .= dechex(mt_rand(0,15));//随机数字
    }

//保存在SESSION里面可以持久保存
    $_SESSION['code']=$_random;

//创建一张图像     设置长和高
    $_img=imagecreatetruecolor($_width,$_height);

//画笔白色
    $_white=imagecolorallocate($_img,255,255,255);
//画笔黑色
    $_black=imagecolorallocate($_img,0,0,0);

//给图片填充白色颜色
    imagefill($_img,0,0,$_white);

    if($_flag){
        //给图片创建黑色边框
        imagerectangle($_img,0,0,$_width-1,$_height-1,$_black);
    }

//随即画出6个线条
    for($i=0;$i<6;$i++){
        $_rnd_color=imagecolorallocate($_img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
//    绘制线条
        imageline($_img,mt_rand(0,$_width),mt_rand(0,$_height),mt_rand(0,$_width),mt_rand(0,$_height),$_rnd_color);
    }

//随机雪花
    for($i=0;$i<100;$i++){
        $_rnd_color=imagecolorallocate($_img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
//    绘制雪花
        imagestring($_img,1,mt_rand(1,$_width),mt_rand(1,$_height),'*',$_rnd_color);
    }

//输出验证码
    for($i=0;$i<strlen($_SESSION['code']);$i++){
        $_rnd_color=imagecolorallocate($_img,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));
        imagestring($_img,5,$i*$_width/$_rnd_code+mt_rand(1,10),mt_rand(1,$_height/2),$_SESSION['code'][$i],$_rnd_color);
    }

//输出图像
    header('Content-Type:image/png');
    imagepng($_img);

//销毁图像
    imagedestroy($_img);
}


?>