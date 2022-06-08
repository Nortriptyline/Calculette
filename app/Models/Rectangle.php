<?php

namespace App\Models;

use App\Abstracts\Forme;

class Rectangle extends Forme
{

    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->set_width($width);
        $this->set_height($height);
    }

    private function set_width($width)
    {
        $this->width = $width;
    }
    private function set_height($height)
    {
        $this->height = $height;
    }

    public function set_aire()
    {
        $this->aire = $this->width * $this->height;
    }

    public function set_perimetre()
    {
        $this->perimetre = ($this->width + $this->height) * 2;
    }
}
