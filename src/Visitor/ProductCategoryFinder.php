<?php

namespace Maksym\MyShop\Visitor;

use Maksym\MyShop\Product\ProductCategory;

class ProductCategoryFinder extends AbstractCatalogVisitor
{
    private ProductCategory $productCategory;

    public function __construct(
        private readonly int $id
    )
    {
        $this->productCategory = new ProductCategory(0, 'Not found');
    }

    function visitProductCategoryHead(ProductCategory $productCategory): void
    {
        if ($productCategory->getId() === $this->id) {
            $this->productCategory = $productCategory;
        }
    }

    public function getProductCategory(): ProductCategory
    {
        return $this->productCategory;
    }
}