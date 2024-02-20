<?php
class Food extends Product
{
    public $type_of_food;
    public $ingredients;
    public $proteins;
    public $fats;
    public $calcium;
    public $phosphorus;
    public $magnesium;
    public $humidity;
    public function __construct(int $id, string $name, string $price, string $description, string $brand, Category $category, string $img, string $type_of_food, string $ingredients, string $proteins, string $fats, string $calcium, string $phosphorus, string $magnesium, string $humidity)
    {
        parent::__construct($id, $name, $price, $description, $brand, $category, $img);
        $this->type_of_food = $type_of_food;
        $this->ingredients = $ingredients;
        $this->proteins = $proteins;
        $this->fats = $fats;
        $this->calcium = $calcium;
        $this->phosphorus = $phosphorus;
        $this->magnesium = $magnesium;
        $this->humidity = $humidity;
    }
}