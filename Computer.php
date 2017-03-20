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

   private function init() /** init est une fonction qui renvoi une valeur */
   {
       $this->procType = "unknown processor";
   }

   public function setProcType($procType)
   {
       if($procType === ""){
           $this->init();
       }else{
           $this->procType = $procType;
       }

       $this->procType = $procType; /** on peut mettre la $procType à la place de $type, $this->procType définit la class*/
   }

   public function getProcType()
   {
       return $this->procType;
   }


}