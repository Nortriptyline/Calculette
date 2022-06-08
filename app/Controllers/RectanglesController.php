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
        
        // On s'assure d'avoir les informations nécessaires à la création d'un rectangle
        if (!$width || !$height) {
            response()->json([
                "message" => "height and width parameters required"
            ], 422);
            die;
        }

        $this->rectangle = new Rectangle($width, $height);
    }

    public function area()
    {
        $this->rectangle->set_aire();

        response()->json([
            "area" => $this->rectangle->aire
        ]);
    }

    public function perimeter()
    {
        $this->rectangle->set_perimetre();
        response()->json([
            "perimeter" => $this->rectangle->perimetre
        ]);
    }
}
