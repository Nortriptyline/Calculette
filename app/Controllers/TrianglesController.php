<?php

namespace App\Controllers;


use Leaf\Http\Request;

class TrianglesController
{
    private $triangle;

    public function __construct()
    {

        $a = Request::get("A");
        $b = Request::get("B");
        $c = Request::get("C");

        if (!$a || !$b || !$c) {
            sendError("Parametre a, b, c requis");
        }

        $this->triangle = instanciateTriangle($a, $b, $c);
    }

    /**
     * area
     * Route: /triangle/area?A=X&B=Y&C=Z
     * @return void
     */
    public function area()
    {

        $area = $this->triangle->calcArea();
        response()->json([
            "area" => $area
        ]);
    }

    /**
     * perimeter
     * Route: /triangle/perimeter?A=X&B=Y&C=Z
     * @return void
     */
    public function perimeter()
    {

        $perimeter = $this->triangle->calcPerimeter();
        response()->json([
            "perimeter" => $perimeter
        ]);
    }
}
