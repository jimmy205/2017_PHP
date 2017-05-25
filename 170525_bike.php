<?php

$gear=1;

class bike{
    private $speed=0;

    function upspeed($gear){
        if($gear){$this->speed = ($this->speed<1)?1:($this->speed*1.2);}
            else {$this->speed = ($this->speed<1)?1:($this->speed*1.5);}
//            else if ($gear=3){$this->speed = ($this->speed<1)?1:($this->speed*2.2);}
    }
    function  downspeed(){
        $this->speed = ($this->speed<0)?0:($this->speed*0.7);
    }
    function getspeed(){
        return $this->speed;
    }
}

$mybike = new bike;
$urbike = new bike;

$mybike->upspeed($gear);$mybike->upspeed($gear);$mybike->upspeed($gear);$mybike->upspeed($gear);$mybike->upspeed($gear);

$urbike->upspeed($gear);$urbike->downspeed($gear);$urbike->upspeed($gear);$urbike->upspeed($gear);

echo $mybike->getspeed() . '<br>';
echo $urbike->getspeed() ;