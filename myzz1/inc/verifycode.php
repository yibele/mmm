<?php

class ValidationCOde {
   /**
    private $width;
    private $height;
    private $codeNum;
    private $imge;
    private $disturbColorNum;
    private $checkCode;

    function __construct($width = 80,$height=20,$codeNum=4){
        $this->width = $width;
        $this->height = $height;
        $this->codeNum = $codeNum;
        $this->checkCode = $this->createCheckCode();
        $number = floor($width*$height/15);

        if($number > 24-$codeNUm){
            $this->disturbColorNum = 240-$codeNum;
        }else{
            $this->disturbColorNum = $number;
        }
    }

    function showImage($fontFace=""){
        // chuang jian tu xiang bei jing 
        $this->createImage();
        //chuangjian ganrao yuan su 
        $this->setDisturbColor();
        //xiang tu xiang sui ji hua chu wen ben 
        $this->outputText($fontFace);

        $this->outputImage();
    }

    function getCheckCode(){
        return $this->checkCode;
    }

    private function createImage(){
        //创建图像资资源
        $this->image =imagecreatetruecolor($this->width,$this->height); 
        //随机北京颜色
        $backColor = imagecolorallocate($this->image,rand(255,255),rand(255,255),rand(255,255));
        //为背景填充颜色
        imagefill($this->image,0,0,$backColor);
        //设置边框颜色
        $border = imagecolorallocate($this->image,0,0,0)
    }
    */
}
