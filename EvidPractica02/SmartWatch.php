<?php

require 'Watch.php';
//SmartWatch class
class SmartWatch extends Watch
{
    public function __construct
    (
        //SmartWatch's properties
        $Name,
        $Price,
        $Brand,
        $WaterResistance,
        private string $OperativeSystem,
        private int $Memory,
        private string $Screen,
        private array $Connectivity
    )
    {
        parent::__construct($Name,$Price,$Brand,$WaterResistance);
    }

    public function getInfo2()
    {
        //Info will be shown here
        $ul = "<ul> Connectivity";
        foreach($this->Connectivity as $Connectivity)
        {
            $ul .= "<li> $Connectivity </li>";
        }
        $ul .= "</ul>";
        echo $ul.=parent::getInfo();
    }
}

$smartWatch1 = new SmartWatch
(
    'Samsung Galxy watch 4',
    '5932.46',
    'Samsung',
    50,
    'WearOs',
    16,
    'SuperAMOLED',
    ['Bluetooth','Wifi 2.4 & 5 GHz','NFC','GPS']
);
echo $smartWatch1->getInfo2();