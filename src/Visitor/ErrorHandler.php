<?php

namespace Maksym\MyShop\Visitor;

use Maksym\MyShop\Product\ProductCategory;
use RuntimeException;

class ErrorHandler extends AbstractCatalogVisitor
{
    function visitProductCategoryHead(ProductCategory $productCategory): void
    {
        if ($productCategory->getLabel() === "") {
            throw new RuntimeException('item should include label');
        }
    }
}