<?php

namespace App\Models;

use App\Abstracts\Forme;

/**
 *              A
 *             /\
 *            /  \
 *           /____\
 *          B      C
 */

class Triangle extends Forme
{
    public function __construct($lenAb, $lenAc, $lenBc)
    {
        $this->ab = $lenAb;
        $this->ac = $lenAc;
        $this->bc = $lenBc;
    }

    /**
     * get_aire
     * 
     * Pour calculer l'aire d'un triangle quelconque uniquement à partir de la longueur de ses côtés,
     * nous pouvons utiliser la formule de Héron
     * 
     * @return float
     */
    public function set_aire()
    {
        // Pour utiliser la formule de Héron, nous avons besoin de connaître le périmetre du triangle
        $this->set_perimetre();
        // Héron
        $p = $this->perimetre / 2.0;
        $pa = $p * ($p - $this->ab) * ($p - $this->bc) * ($p - $this->ac);
        $this->aire = sqrt($pa);
    }


    /**
     * get_perimetre
     *
     * Le périmètre d'un triangle représente l'addition de la longueur de chacun des côtés
     * 
     * @return void
     */
    public function set_perimetre(): void
    {
        $this->perimetre = $this->ab + $this->bc + $this->ac;
    }
}
