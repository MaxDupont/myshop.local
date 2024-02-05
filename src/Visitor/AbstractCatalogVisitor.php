<?php

declare(strict_types = 1);

namespace Maksym\MyShop\Visitor;

use Maksym\MyShop\Product\Catalog;
use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;

abstract class AbstractCatalogVisitor implements CatalogVisitorInterface
{
    function visitCatalogHead(Catalog $catalog): void
    {
        // TODO: Implement visitCatalogHead() method.
    }

    function visitCatalogTail(Catalog $catalog): void
    {
        // TODO: Implement visitCatalogTail() method.
    }

    function visitProductCategoryHead(ProductCategory $productCategory): void
    {
        // TODO: Implement visitProductCategoryHead() method.
    }

    function visitProductCategoryTail(ProductCategory $productCategory): void
    {
        // TODO: Implement visitProductCategoryTail() method.
    }

    function visitProductCategoriesHead(ProductCategories $productCategories): void
    {
        // TODO: Implement visitProductCategoriesHead() method.
    }

    function visitProductCategoriesTail(ProductCategories $productCategories): void
    {
        // TODO: Implement visitProductCategoriesTail() method.
    }
}