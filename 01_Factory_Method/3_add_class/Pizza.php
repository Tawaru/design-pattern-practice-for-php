<?php

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = [];

    public function __construct(){}

    public function prepare()
    {
        echo "Prepare " . $this->name . "\n";
        echo "Tossing dough..." . $this->dough . "\n";
        echo "Adding sauce..." . $this->sauce . "\n";
        echo "Adding toppings: \n";
        foreach ($this->toppings as $value) {
            echo "   " . $value . "\n";
        }
    }

    public function bake()
    {
        echo "Bake for 25 minutes at 350℉\n";
    }

    public function cut()
    {
        echo "Cut the pizza into diagonal slices\n";
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    public function getName()
    {
        return $this->name;
    }

    public function toString()
    {
        $display = "---- " . $this->name . " ----\n";
        $display .= $this->dough . "\n";
        $display .= $this->sauce . "\n";
        foreach ($this->toppings as $value) {
            $display .= $value . "\n";
        }
        return $display;
    }
}

class NYStyleCheesePizza extends Pizza
{

    public function __construct()
    {
        parent::__construct();
        $this->name = "NY Style Sauce and Cheese Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";
        $this->toppings[] = "Grated Reggiano Cheese";
    }
}

class NYStyleVeggiePizza extends Pizza
{

    public function __construct()
    {
        parent::__construct();
        $this->name = "NY Style Veggie Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";
        $this->toppings[] = "Grated Reggiano Cheese";
        $this->toppings[] = "Garlic";
        $this->toppings[] = "Onion";
        $this->toppings[] = "Mushrooms";
        $this->toppings[] = "Red Pepper";
    }
}

class JPStyleTeriyakiPizza extends Pizza
{

    public function __construct()
    {
        parent::__construct();
        $this->name = "JP Style Teriyaki Pizza";
        $this->dough = "Hand-tossed Crust Dough";
        $this->sauce = "Teriyaki Sauce";
        $this->toppings[] = "Japanese Mayonnaise";
        $this->toppings[] = "Roasted Chicken";
        $this->toppings[] = "Shredded Dried Seaweed";
    }
}
