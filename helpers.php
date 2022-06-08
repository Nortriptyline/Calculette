<?php

use App\Models\Triangle;
use App\Models\TriangleIsocele;
use App\Models\TriangleRectangle;


/**
 * instanciate_triangle
 *
 * Détecte le type de triangle selon les données passées et retourne un objet
 * correspondant
 * 
 * @param  float $side1
 * @param  float $side2
 * @param  float $side3
 * @return Triangle|TriangleIsocele|TriangleRectangle
 */
function instanciate_triangle($side1, $side2, $side3)
{
    if (is_triangle_rectangle($side1, $side2, $side3)) {
        return new TriangleRectangle($side1, $side2, $side3);
    } else if (is_triangle_isocele($side1, $side2, $side3)) {
        return new TriangleIsocele($side1, $side2, $side3);
    } else {
        return new Triangle($side1, $side2, $side3);
    }
}

/**
 * is_triangle_rectangle
 *
 * Détermine si le triangle possède un angle droit
 * 
 * @param  float $side1
 * @param  float $side2
 * @param  float $side3
 * @return bool
 */
function is_triangle_rectangle($side1, $side2, $side3): bool
{
    $sides = [$side1, $side2, $side3];
    rsort($sides);
    $hypothenuse = $sides[0];

    // Rectangle si A² = B² + C²
    // A étant l'hypoténuse
    return pow($hypothenuse, 2) == (pow($sides[1], 2) + pow($sides[2], 2));
}

/**
 * is_triangle_isocele
 *
 * Détermine si un triangle est isocele (deux côté égaux)
 * 
 * @param  float $side1
 * @param  float $side2
 * @param  float $side3
 * @return bool
 */
function is_triangle_isocele($side1, $side2, $side3): bool
{
    $sides = [$side1, $side2, $side3];
    // On ordonne les tailles de côtés.
    // Si deux tailles égales existent, elles se situeront cote à cote
    // On peut donc désormais vérifier pour chaque valeur si elle est précédé
    // de cette même valeure
    sort($sides);
    for ($i = 1; $i < count($sides); $i++) {
        if ($sides[$i] == $sides[$i - 1]) {
            return true;
        }
    }

    return false;
}
