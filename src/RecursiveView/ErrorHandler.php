<?php

namespace Maksym\MyShop\RecursiveView;

use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;
use RuntimeException;

class ErrorHandler implements CatalogVisitorInterface
{
    function visitProductCategory(ProductCategory $item): void
    {
        if ($item->getLabel() === "") {
            throw new RuntimeException('item should include label');
        }
    }

    function visitItemStart(ProductCategories $productCategories): void
    {
        // TODO: Implement callItemStart() method.
    }

    function visitItemFinish(ProductCategories $productCategories): void
    {
        // TODO: Implement callItemFinish() method.
    }

}