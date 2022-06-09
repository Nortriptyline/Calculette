<?php

namespace App\Controllers;


use App\Models\Rectangle;
use Leaf\Http\Request;

class RectanglesController
{
    private $rectangle;

    public function __construct()
    {

        $width = Request::get('width');
        $height = Request::get('height');

        // On s'assure d'avoir les informations nécessareas à la création d'un rectangle
        if (!$width || !$height) {
            sendError("Parametres width et height requis");
        }

        $this->rectangle = new Rectangle($width, $height);
    }

    /**
     * area
     * Route: /rectangle/area?width=X&height=Y
     * @return void
     */
    public function area()
    {

        $area = $this->rectangle->calcArea();
        response()->json([
            "area" => $area
        ]);
    }

    /**
     * perimeter
     * Route: /rectangle/perimeter?width=X&height=Y
     * @return void
     */
    public function perimeter()
    {

        $perimeter = $this->rectangle->calcPerimeter();
        response()->json([
            "perimeter" => $perimeter
        ]);
    }
}
