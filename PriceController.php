<?php
namespace OurApplication\Controller;

class PriceController {

    private static $instance;
    static function getInstance() {
        if ( !self::$instance ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    static function showPrice() {
        echo "10 tk";
    }
}

?>