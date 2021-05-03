<?php
    session_start();
    
    $random = rand(100001, 999999);
    $part_one =  substr(md5($random), 0, 10);
    $one = rand(0,9);
    $part_two =  substr(md5($random), 10, 10);
    $two = rand(0,9);
    $part_three =  substr(md5($random), 20, 12);
    $three = rand(0,9);
    $_SESSION['captcha'] = $part_one.$one.'a'.$part_two.'z'.$two.$part_three.'x'.$three;
    
    $image = imagecreatetruecolor(90, 35);
    imagefilledrectangle($image, 0, 0, 90, 35, imagecolorallocate($image, 255, 255, 255));
    imagettftext($image, 20, 0, 15, 23, imagecolorallocate($image, 82, 82, 82), '../fonts/font_cap.ttf', $random);
       
    header('Content-type: image/gif');

    imagegif($image);
    imagedestroy($image);
?>