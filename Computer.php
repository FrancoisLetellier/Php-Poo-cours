<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 20/03/17
 * Time: 09:52
 */

namespace wcs; /** toujours en haut  */


class Computer
{

   public $procType;

   public function init() /** init est une fonction qui renvoi une valeur */
   {
       $this->procType = "Intel";
   }

   public function setProcType($type)
   {
       $this->procType = $type; /** on peut mettre la $procType à la place de $type, $this->procType définit la class*/
   }

   public function getProcType()
   {
       return $this->procType;
   }


}