<?php
class Game extends Product
{
    public $type_of_game;
    public $recommended_age;
    public $shape;
    public $material;
    public function __construct(int $id, string $name, string $price, string $description, string $brand, Category $category, string $img, string $type_of_game, string $recommended_age, string $shape, string $material)
    {
        parent::__construct($id, $name, $price, $description, $brand, $category, $img);
        $this->type_of_game = $type_of_game;
        $this->recommended_age = $recommended_age;
        $this->shape = $shape;
        $this->material = $material;
    }
    public function get_type_of_game()
    {
        return $this->type_of_game;
    }
    public function get_recommended_age()
    {
        return $this->recommended_age;
    }
    public function get_shape()
    {
        return $this->shape;
    }
    public function get_material()
    {
        return $this->material;
    }
}