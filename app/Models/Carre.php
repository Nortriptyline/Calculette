<?php

namespace App\Models;

class Carre extends Rectangle
{
    private float $len; // Longueur des côtés

    /**
     * __construct
     *
     * @param  mixed $len Longueurs des côtés
     * @return void
     */
    public function __construct(float $len)
    {
        $this->setLen($len);
        parent::__construct($len, $len);
    }

    /**
     * setLen
     *
     * @param  float $len
     * @return void
     */
    private function setLen(float $len)
    {
        $this->len = $len;
    }

    public function calcPerimeter(): float
    {
        $perimeter = $this->len * 4;
        $this->setPerimeter($perimeter);

        return $perimeter;
    }

    public function calcArea(): float
    {
        $area = pow($this->len, 2);
        $this->setArea($area);

        return $area;
    }
}
