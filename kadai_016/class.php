<?php
class Food {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo "価格: " . $this->price . "円<br>";
    }
}

class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo "身長: " . $this->height . "cm<br>";
    }
}

$apple = new Food("りんご", 150);
print_r($apple);
echo "<br>";
$apple->show_price();

$dog = new Animal("犬", 60, 20);
print_r($dog);
echo "<br>";
$dog->show_height();
?>
