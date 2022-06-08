<?php

namespace App\Abstracts;

use App\Interfaces\Geometry;

abstract class Forme implements Geometry
{
    public $aire;
    public $perimetre;
}
