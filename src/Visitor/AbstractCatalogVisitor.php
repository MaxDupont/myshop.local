<?php

declare(strict_types = 1);

namespace Maksym\MyShop\Visitor;

use Maksym\MyShop\Product\Catalog;
use Maksym\MyShop\Product\Product;
use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;
use Maksym\MyShop\Product\Products;

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

    function visitProductHead(Product $product): void
    {
        // TODO: Implement visitProductHead() method.
    }

    function visitProductTail(Product $product): void
    {
        // TODO: Implement visitProductTail() method.
    }

    function visitProductsHead(Products $products): void
    {
        // TODO: Implement visitProductsHead() method.
    }

    function visitProductsTail(Products $products): void
    {
        // TODO: Implement visitProductsTail() method.
    }


}