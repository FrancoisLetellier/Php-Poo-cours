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

   private $procType;

   public function init() /** init est une fonction qui renvoi une valeur */
   {
       $this->procType = "Intel";
   }

   public function setProcType($procType)
   {
       if($procType === "")
       {
           throw new \Exception("Cannot set empty value");
       }

       $this->procType = $procType; /** on peut mettre la $procType à la place de $type, $this->procType définit la class*/
   }

   public function getProcType()
   {
       return $this->procType;
   }


}