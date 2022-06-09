<?php

namespace App\Models;

use App\Abstracts\Forme;
use App\Models\Disque;

class Couronne extends Forme
{

    private Disque $di; // Disque intérieur
    private Disque $de; // Disque extérieur
    /**
     * __construct
     *
     * @param  float $re Rayon cercle extérieur
     * @param  float $ri Rayon cercle intérieur
     * @return void
     */
    public function __construct(float $re, float $ri)
    {
        $this->setDi($ri);
        $this->setDe($re);
    }

    public function calcArea(): float
    {
        // Pour calculer l'aire d'une couronne, on soustrait
        // l'air du petit disque à celui du grand
        $ae = $this->de->calcArea();
        $ai = $this->di->calcArea();

        $area = $ae - $ai;
        $this->setArea($area);

        return $area;
    }

    public function calcPerimeter(): float
    {
        // Pour calculer le périmètre d'une couronne, on ajoute
        // le périmètre du grand disque à celui du petit
        $pe = $this->de->calcPerimeter();
        $pi = $this->di->calcPerimeter();

        $perimeter = $pe + $pi;
        $this->setPerimeter($perimeter);

        return $perimeter;
    }

    /**
     * setDi
     *
     * @param  float $di
     * @return void
     */
    private function setDi(float $di)
    {
        $this->di = new Disque($di);
    }

    /**
     * setDe
     *
     * @param  float $de
     * @return void
     */
    public function setDe(float $de)
    {
        $this->de = new Disque($de);
    }
}
