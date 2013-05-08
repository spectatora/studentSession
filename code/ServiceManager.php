<?php
$config = array(
    'factories' => array(
        'CDPlayer' => function () { 
            return new CDPlayer(new LedZeppelin);
        },
    )
)
//...
$sm = new Zend\ServiceManager\ServiceManager($config);                    
$cd = $sm->get('CDPlayer');
$cd->play();
//output: we are playing LedZeppelin