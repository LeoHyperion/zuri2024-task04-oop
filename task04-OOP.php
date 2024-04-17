<?php


class Appliance //CLASS #1
{
    // PROPERTIES
    protected $type; //PROPERTY #1
    public $manufacturer; //PROPERTY #2
    public $year; //PROPERTY #3


    //METHODS
    public function __construct($type, $manufacturer, $year) //METHOD #1
    {
        $this->type = $type;
        $this->manufacturer = $manufacturer;
        $this->year = $year;
    }


    public function intro() //METHOD #2
    {
        echo "Tell us about this {$this->manufacturer} {$this->type}.";
    }
}



class Luxury extends Appliance //CLASS #2
{
    //PROPERTIES
    public $price;
    public $color;


    //METHODS
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function brand($color, $price)
    {
        echo "This $color appliance is a {$this->manufacturer} {$this->type}, made in {$this->year}, and it costs $price.";
    }
}



$tv = new Luxury("TV", "Samsung", "2010");
$tv->intro();
echo "<br><br>";
$tv->brand("Silver", "N720,000");
echo "<br><br><br><br>";
$ac = new Luxury("AC", "LG", "2016");
$ac->intro();
echo "<br><br>";
$ac->brand("Black", "$7,000");
