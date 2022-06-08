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
        $this->triangle = instanciate_triangle($a, $b, $c);
    }

    public function area()
    {
        $this->triangle->set_aire();
        response()->json([
            "area" => $this->triangle->aire
        ]);
    }

    public function perimeter()
    {
        $this->triangle->set_perimetre();
        response()->json([
            "perimeter" => $this->triangle->perimetre
        ]);
    }
}
