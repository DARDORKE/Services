<?php

namespace App\services;


class ReductionService
{
    public function applyReduction($product, $priceReduction): float
    {
        return $product->getPrice() - $priceReduction;
    }
}