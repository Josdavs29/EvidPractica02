<?php 

//Watch class
class Watch
{
    //Methods
    public function __construct
    (
        //Watch's properties
        private string $Name,
        private float $Price,
        private string $Brand,
        private int $WaterResistance
    )
    {}

    public function getInfo()
    {
        //We'll show the information here
        $info = "<b>Name: </b>$this->Name  
        <br> <b>$ </b>$this->Price <br>
        <b>Brand: </b>$this->Brand <br>
        <b>Water Resistance: </b>$this->WaterResistance meters <br>";
        if($this->WaterResistance>199)
        {
            $info .= "The watch has a great resistance <br><br>";
        }
        else 
        {
            $info .= "The watch doesn't resist much pressure <br><br>";
        }
        echo $info;
    }

}

//Objects from Watch

$watch1 = new Watch
(
    'GA-2100-1A1CR',
    '2799',
    'Casio',
    '200'
);
echo $watch1->getInfo();

$watch2 = new Watch
(
    'GA-2100SKE-7ACR',
    '3099',
    'Casio',
    100
);
echo $watch2->getInfo();