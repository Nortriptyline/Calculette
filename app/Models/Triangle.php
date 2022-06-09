<?php

namespace App\Models;


use App\Abstracts\Forme;

//
//             A
//            /\
//           /  \
//          /____\
//         B      C

class Triangle extends Forme
{

      /**
       * __construct
       *
       * @param  float $lenAb Longeur côté AB
       * @param  float $lenAc Longeur côté AC
       * @param  float $lenBc Longeur côté BC
       * @return void
       */
      public function __construct(float $lenAb, float $lenAc, float $lenBc)
      {

            $this->setAb($lenAb);
            $this->setAc($lenAc);
            $this->setBc($lenBc);
      }

      /**
       * setAb
       *
       * @param  float $len Longeur du côté
       * @return void
       */
      private function setAb(float $len)
      {

            $this->ab = $len;
      }

      /**
       * setAc
       * 
       * @param  float $len Longeur du côté
       * @return void
       */
      private function setAc(float $len)
      {

            $this->ac = $len;
      }

      /**
       * setBc
       *
       * @param  float $len Longeur du côté
       * @return void
       */
      private function setBc(float $len)
      {

            $this->bc = $len;
      }

      public function calcArea(): float
      {

            /** 
             * Pour calculer l'area d'un triangle quelconque uniquement à partir de 
             * la longueur de ses côtés, nous pouvons utiliser la formule de Héron
             */
            $perimeter = $this->calcPerimeter();
            // Héron
            $p = $perimeter / 2.0;
            $pa = $p * ($p - $this->ab) * ($p - $this->bc) * ($p - $this->ac);
            $area = sqrt($pa);
            $this->setArea($area);

            return $area;
      }

      public function calcPerimeter(): float
      {

            /**
             * Le périmètre d'un triangle représente l'addition de la
             * longueur de chacun des côtés
             */
            $perimeter = $this->ab + $this->bc + $this->ac;
            $this->setPerimeter($perimeter);

            return $perimeter;
      }
}
