<?php

namespace APp\Models;

use App\Models\Triangle;

class TriangleIsocele extends Triangle
{
    protected $base;
    public function __construct($sidesLen, $baseLen)
    {
        parent::__construct($sidesLen, $sidesLen, $baseLen);
    }
}
