<?php
interface Disc {}

class LedZeppelin implements Disc {}

class ACDC implements Disc {}

class CDPlayer
{
    protected $disc = null;
    
    public function __construct(Disc $disc)
    {
       $this->disc = $disc;
    }
    
    public function play()
    {
        // plays the CD
        echo 'we are playing ' . get_class($this->disc);
    }
}

$cd = new LedZeppelin;
$player = new CDPlayer($cd);
$player->play();






$injector = new DIContainer();
$injector->forType('Disc')->willUse('ACDC');
$cd = $injector->create('CDPlayer');










