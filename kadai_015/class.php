<?php

    Class Food{
        private $name;
        private $price;

        public function __construct(string $goods, int $cost){
            $this->name = $goods;
            $this->price = $cost;
        }

        public function show_price(){
            echo "{$this->price}<br>";
        }
    }

    Class Animal{
        private $name;
        private $height;
        private $weight;

        public function __construct(string $goodes,int $heighs,int $weights){
            $this->weight = $weights;
            $this->height = $heighs;
            $this->name = $goodes;
        }

        public function show_price(){
            echo "{$this->height}<br>";
        }
    }

$food = new Food("potato",250);
$animal = new Animal("dog",60,5000);

print_r($food);
echo "<br>";
print_r($animal);
echo "<br>";
$food->show_price();
$animal->show_price();


?>