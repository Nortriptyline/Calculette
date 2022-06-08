<?php

namespace App\Controllers;

use App\Models\Carre;
use Leaf\Http\Request;

class CarresController
{
    private $carre;

    public function __construct()
    {
        $this->request = new Request;
        $len = Request::get('length');
        $this->carre = new Carre($len);
    }

    public function area()
    {
        $this->carre->set_aire();
        response()->json([
            "area" => $this->carre->aire
        ]);
    }

    public function perimeter()
    {
        $this->carre->set_perimetre();
        response()->json([
            "perimeter" => $this->carre->perimetre
        ]);
    }
}
