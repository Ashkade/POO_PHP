<?php
    class Car{
        private $brand;
        private $color;
    
        public function __construct($brand,$color){
            $this->brand=$brand;
            $this->color=$color;
        }

        public function call(){
            echo $this->brand.' '.$this->color.'<br>';
        }

    }

    $car1 = new Car('CADILLAC','Rose');
    $car2 = new Car('FERRARI','Jaune');

    $car1->call();
    $car2->call();

?>


</div>