<?php

namespace App\services;

class ProductService
{
    public function displayProducts($products): string {
        $result = "";
        foreach ($products as $product) {
            $result .=  " - {$product->getName()} : {$product->getPrice()} €";
        }
        return $result;
    }
}
