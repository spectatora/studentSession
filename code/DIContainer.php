<?php

$injector = new DIContainer();
$injector->whenCreating('CDPlayer')
        ->forVariable('disc')
        ->willUse('ACDC');

$cd = $injector->create('CDPlayer');
$cd->play();

//output: we are playing ACDC






