<?php

class Box {
    protected $length;
    protected $height;
    protected $width;
    protected $material;
    public static $count;

    public function __construct($length, $height, $width) {
        $this->length = $length;
        $this->height = $height;
        $this->width = $width;
    }

    public function volume() {
        var_dump(self::$count);
        return $this->length * $this->height * $this->width;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        if($length > 0) {
            $this->length = $length;
        }
    }
    
    public static function countUp() {
        self::$count++;
    }
}

class MetalBox extends Box {
    public $weight;
    public function __construct($length, $height, $width) {
        $this->length = $length;
        $this->height = $height;
        $this->width = $width;
        $this->material = 'metal';
    }
}

$box = new MetalBox(1,1,1);
$box->volume();
MetalBox::countup();
MetalBox::countUp();
MetalBox::countUp();
var_dump(MetalBox::$count);