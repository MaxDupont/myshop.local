<?php

namespace Maksym\MyShop\Product;

interface CategoriesContainerInterface
{
    /**
     * @return array<ProductCategory>
     */
    public function toArray(): array;
}