<?php
class Cart
{
    private $products = array();
    public function add_product(Product $product)
    {
        $this->products[] = $product;
    }
    public function calculate_price($is_registered = false)
    {
        $total = 0;
        foreach ($this->products as $product) {
            $price += $product->get_price();
            if ($is_registered) {
                $price -= $price * 0.20;
            }
            $total += $price;
        }
        return $total;
    }
}