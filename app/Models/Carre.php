<?php

namespace App\Models;

class Carre extends Rectangle
{
    public function __construct($len)
    {
        parent::__construct($len, $len);
    }
}