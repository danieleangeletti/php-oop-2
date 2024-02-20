<?php
require_once __DIR__ . "/../traits/has_materials.php";
require_once __DIR__ . "/../traits/free_shipping.php";
class Game extends Product
{
    use HasMaterials, FreeShipping;
    public $type_of_game;
    public $recommended_age;
    public $shape;
    private $free_shipping = null;
    public function __construct(int $id, string $name, string $price, string $description, string $brand, Category $category, string $img, string $type_of_game, string $recommended_age, string $shape, string $material)
    {
        parent::__construct($id, $name, $price, $description, $brand, $category, $img);
        $this->type_of_game = $type_of_game;
        $this->recommended_age = $recommended_age;
        $this->shape = $shape;
        $this->material = $material;
    }
}