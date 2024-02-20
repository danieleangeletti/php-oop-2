<?php
class Product
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $brand;
    public $category;
    public $img;
    public function __construct(int $id, string $name, string $price, string $description, string $brand, string $category, string $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->brand = $brand;
        $this->category = $category;
        $this->img = $img;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_price()
    {
        return $this->price;
    }
    public function get_description()
    {
        return $this->description;
    }
    public function get_brand()
    {
        return $this->brand;
    }
    public function get_category()
    {
        return $this->category;
    }
    public function get_img()
    {
        return $this->img;
    }
}