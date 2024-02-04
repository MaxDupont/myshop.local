<?php

namespace Maksym\MyShop\RecursiveView;

use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;
use Maksym\MyShop\RecursiveView\CatalogVisitorInterface;

class ProductCategoryFinder implements CatalogVisitorInterface
{

    private ProductCategory $productCategory;
    public function __construct(
        private readonly int $id
    )
    {
        $this->productCategory = new ProductCategory(0, 'Not found');
    }

    function visitProductCategory(ProductCategory $item): void
    {
        if ($item->getId() === $this->id) {
            $this->productCategory = $item;
        }
    }

    /**
     * @inheritDoc
     */
    function visitItemStart(ProductCategories $productCategories): void
    {
        // TODO: Implement visitItemStart() method.
    }

    /**
     * @inheritDoc
     */
    function visitItemFinish(ProductCategories $productCategories): void
    {
        // TODO: Implement visitItemFinish() method.
    }

    public function getProductCategory(): ProductCategory
    {
        return $this->productCategory;
    }


}