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
    public function get_type_of_food()
    {
        return $this->type_of_food;
    }
    public function get_ingredients()
    {
        return $this->ingredients;
    }
    public function get_proteins()
    {
        return $this->proteins;
    }
    public function get_fats()
    {
        return $this->fats;
    }
    public function get_calcium()
    {
        return $this->calcium;
    }
    public function get_phosphorus()
    {
        return $this->phosphorus;
    }
    public function get_magnesium()
    {
        return $this->magnesium;
    }
    public function get_humidity()
    {
        return $this->humidity;
    }
}