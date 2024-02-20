<?php
require_once __DIR__ . "/../traits/free_shipping.php";
class Kennel extends Product
{
    use FreeShipping;
    public $type_of_kennel;
    public $size;
    public $softness;
    public $maximum_recommended_weight;
    private $free_shipping = null;
    public function __construct(int $id, string $name, string $price, string $description, string $brand, Category $category, string $img, string $type_of_kennel, string $size, string $softness, string $maximum_recommended_weight)
    {
        parent::__construct($id, $name, $price, $description, $brand, $category, $img);
        $this->type_of_kennel = $type_of_kennel;
        $this->size = $size;
        $this->softness = $softness;
        $this->maximum_recommended_weight = $maximum_recommended_weight;
    }
}