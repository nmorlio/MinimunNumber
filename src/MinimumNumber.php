<?php

namespace MinimumNumber;

class MinimumNumber
{
    public $a;
    public $b;
    public $minimum;
    

    public function compare($a, $b)
    {      
        $this->minimum=0;

        //mientras a y b mayores a cero
        //lo va a hacer X veces hasta que el numero menor llegue a cero, y el minimo habra sumado X veces
        //por lo tanto devolvera ese numero
        while ($a >0 && $b >0){
            --$a;
            --$b;
            ++$this->minimum;
                      
        }

        return $this->minimum;

    }

}