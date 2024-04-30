<?php

require_once 'Food.php';

// Factory class to create food items
class FoodFactory {
    public static function createFood($type) {
        switch($type) {
            case 'pizza':
                return new Pizza();
            case 'burger':
                return new Burger();
            default:
                throw new Exception("Invalid food type.");
        }
    }
}

?>
