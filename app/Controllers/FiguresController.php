<?php

namespace App\Controllers;

use App\Models\Carre;
use App\Models\Rectangle;
use App\Models\TriangleRectangle;
use App\Models\Triangle;
use App\Models\TriangleIsocele;

class FiguresController
{
    public function index()
    {
        $triangle = new TriangleRectangle(4.8,2,5.2);
        echo $triangle->get_aire();
        // $rectangle = new Rectangle;
        // $perimetre = $rectangle->get_perimetre();
        // $aire = $rectangle->get_aire();
        // echo "Périmetre rectangle: $perimetre \n";
        // echo "Aire rectangle: $aire \n";

        // echo "\n\n\n\n\n\n";

        // $carre = new Carre;
        // $perimetre = $carre->get_perimetre();
        // $aire = $carre->get_aire();
        // echo "Périmetre carré: $perimetre \n";
        // echo "Aire carré: $aire \n";
    }
}
