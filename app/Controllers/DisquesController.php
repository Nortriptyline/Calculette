<?php

namespace App\Controllers;


use App\Models\Disque;
use Leaf\Http\Request;

class DisquesController
{
    private $disque;

    public function __construct()
    {

        if (!$radius = Request::get("r")) {
            sendError("Paramètre r requis");
        }
        $this->disque = new Disque($radius);
    }

    /**
     * area
     * Route: /disque/area?r=X
     * @return void
     */
    public function area()
    {

        $area = $this->disque->calcArea();
        response()->json([
            "area" => $area
        ]);
    }

    /**
     * perimeter
     * Route: /disque/perimeter?r=X
     * @return void
     */
    public function perimeter()
    {

        $perimeter = $this->disque->calcPerimeter();
        response()->json([
            "perimeter" => $perimeter
        ]);
    }
}
