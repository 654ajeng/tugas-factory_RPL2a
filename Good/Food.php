<?php

// Abstract class for food items
abstract class Food {
    protected $name;

    public function getName() {
        return $this->name;
    }

    abstract public function prepare();
}

// Concrete class for Pizza
class Pizza extends Food {
    protected $name = "Pizza";

    public function prepare() {
        return "Preparing Pizza...";
    }
}

// Concrete class for Burger
class Burger extends Food {
    protected $name = "Burger";

    public function prepare() {
        return "Preparing Burger...";
    }
}

?>
