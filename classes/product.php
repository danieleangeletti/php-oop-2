<?php
require __DIR__ . "/category.php";
class Product
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $brand;
    public $category;
    public $img;
    public function __construct(int $id, string $name, float $price, string $description, string $brand, Category $category, string $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->brand = $brand;
        $this->category = $category;
        $this->img = $img;
        if (is_numeric($name)) {
            throw new Exception("ERROR: YOU ENTERED A NUMBER WHILE A STRING IS EXPECTED");
        }
        if (is_numeric($description)) {
            throw new Exception("ERROR: YOU ENTERED A NUMBER WHILE A STRING IS EXPECTED");
        }
        if (is_numeric($img)) {
            throw new Exception("ERROR: YOU ENTERED A NUMBER WHILE A STRING IS EXPECTED");
        }
    }
}