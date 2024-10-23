<?php

namespace src\app;

class Orders {
    public static $orderPiece = 0;

    public function __construct() {
        self::$orderPiece++;
        echo "Orders sehifesi: Sifaris emeliyyati ugurla heyata kecirildi...";
    }

    public function getPrice() {
       return self::$orderPiece;
        
    }

}
