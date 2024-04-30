<?php

// Class to create food items (Bad implementation)
class BadFactory {
    public static function createFood($type) {
        switch($type) {
            case 'pizza':
                return new Pizza();
            case 'burger':
                return new Burger();
            case 'cake':
                return new Cake(); // Problem: adding new food type requires modifying factory class
            default:
                throw new Exception("Invalid food type.");
        }
    }
}
?>
