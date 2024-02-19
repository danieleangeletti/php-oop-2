<?php
class Kennel extends Product
{
    public $type_of_kennel;
    public $size;
    public $softness;
    public $maximum_recommended_weight;
    public function __construct($id, $name, $price, $description, $brand, $category, $img, $type_of_kennel, $size, $softness, $maximum_recommended_weight)
    {
        parent::__construct($id, $name, $price, $description, $brand, $category, $img);
        $this->type_of_kennel = $type_of_kennel;
        $this->size = $size;
        $this->softness = $softness;
        $this->maximum_recommended_weight = $maximum_recommended_weight;
    }
    public function get_type_of_kennel()
    {
        return $this->type_of_kennel;
    }
    public function get_size()
    {
        return $this->size;
    }
    public function get_softness()
    {
        return $this->softness;
    }
    public function get_maximum_recommended_weight()
    {
        return $this->maximum_recommended_weight;
    }
}