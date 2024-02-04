<?php

namespace Maksym\MyShop\Product;

class Catalog implements CategoriesContainerInterface
{

    private ProductCategories $productCategories;

    public function __construct(ProductCategories $productCategories)
    {
        $this->productCategories = $productCategories;
    }

    public function getProductCategories(): ProductCategories
    {
        return $this->productCategories;
    }

    /**
     * @return array<ProductCategory>
     */
    public function toArray(): array
    {
        return $this->productCategories->toArray();
    }
}