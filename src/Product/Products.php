<?php

namespace Maksym\MyShop\Product;

class Products
{
    /**
     * @var array<Product>
     */
    private array $products;

    /**
     * @param Product[] $products
     */
    public function __construct(array $products = [])
    {
        $this->products = $products;
    }

    /**
     * @return array<Product>
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}