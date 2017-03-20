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
    public static $count = 0;

    public function __construct($procType = "Unknown processor")
    {
        $this->setProcType($procType);
        self::$count++;
    }

    public function setProcType($procType)
    {
        if ($procType !== "") {
            $this->procType = $procType;
        } else {
            $this->procType = "Unknown processor";
        }
    }

    public function getProcType()
   {
       return $this->procType;
   }

    public function getInfos()
    {
        echo "---------------" . PHP_EOL;
        echo "Computer number " . self::$count . PHP_EOL;
        echo " processor : " . $this->getProcType() . PHP_EOL;
        echo "---------------" . PHP_EOL;
    }
}