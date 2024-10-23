<?php

declare(strict_types=1);

use src\app\Sale;
use src\app\Payment;
use src\app\Orders;

spl_autoload_register(function($class_name){

    $class_name = str_replace('\\', '/', $class_name);
    $file = __DIR__ . '/' . $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        echo "File tapilmadi: $file";
    }
});

$coat = new Sale();

echo "<br>";
$car = new Payment();
echo "<br>";


$order_coat = new Orders();
echo "Sifaris sayi: " . $order_coat->getPrice() . "<br>";

$order_shoes = new Orders();
echo "Sifaris sayi: " . $order_shoes->getPrice() . "<br>";

$order_boat = new Orders();
echo "Sifaris sayi: " . $order_boat->getPrice() . "<br>";


/* 
 8) Statik metodların obyektə bağlı olmadan necə çağırıldığını izah edin.
*/






















// class Phone {
//     public $name;
//     public $imei_code;
//     public $color;
//     public $price;

//     public function status() {
//         echo "{$this-> name} Satis ucun uygundur. {$this->price} AZN. ";
        
//     }
// }

// $xiaomi = new Phone();
// $xiaomi-> name = "Note 13";
// $xiaomi-> imei_code = "6874687179889687";
// $xiaomi-> color = "black";
// $xiaomi-> price = 370;
// $xiaomi->status();
// echo "<br>";

// class Notebook extends Phone {
//     public function count() {
//         echo "{$this->name} 150 ededdir.";
//     }
// }

// $hp = new Notebook();
// $hp-> name = "HP";
// $hp-> color = "white";
// $hp-> price = 1200;
// $hp->status();
// $hp->count();











?>

