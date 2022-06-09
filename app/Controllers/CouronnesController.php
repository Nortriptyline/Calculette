<?php

namespace App\Controllers;


use App\Models\Couronne;
use App\Models\Disque;
use Leaf\Http\Request;

class CouronnesController
{
    private $couronne;

    public function __construct()
    {

        $re = Request::get("re");
        $ri = Request::get("ri");
        if (!$re || !$ri) {
            sendError("Parametre re et ri requis");
        }
        $this->couronne = new Couronne($re, $ri);
    }

    /**
     * area
     * Route: /couronne/area?re=X&ri=Y
     * @return void
     */
    public function area()
    {

        $area = $this->couronne->calcArea();
        response()->json([
            "area" => $area
        ]);
    }

    /**
     * perimeter
     * Route: /couronne/perimeter?re=X&ri=Y
     * @return void
     */
    public function perimeter()
    {

        $perimeter = $this->couronne->calcPerimeter();
        response()->json([
            "perimeter" => $perimeter
        ]);
    }
}
