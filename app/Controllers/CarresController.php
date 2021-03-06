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
        if (!$len = Request::get('len')) {
            sendError("Paramètre len requis");
        }
        $this->carre = new Carre($len);
    }

    /**
     * area
     * Route: /carre/area?len=X
     * @return void
     */
    public function area()
    {

        $area = $this->carre->calcArea();
        response()->json([
            "area" => $area
        ]);
    }

    /**
     * perimeter
     * Route: /carre/perimeter?len=X
     * @return void
     */
    public function perimeter()
    {

        $perimeter = $this->carre->calcPerimeter();
        response()->json([
            "perimeter" => $perimeter
        ]);
    }
}
