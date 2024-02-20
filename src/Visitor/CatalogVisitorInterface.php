<?php

namespace Maksym\MyShop\Visitor;
use Maksym\MyShop\Product\Catalog;
use Maksym\MyShop\Product\Product;
use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;
use Maksym\MyShop\Product\Products;

interface CatalogVisitorInterface
{
    function visitCatalogHead (Catalog $catalog) : void;

    function visitCatalogTail(Catalog $catalog) : void;

    function visitProductCategoryHead (ProductCategory $productCategory) : void;

    function visitProductCategoryTail(ProductCategory $productCategory) : void;

    function visitProductCategoriesHead (ProductCategories $productCategories) : void;

    function visitProductCategoriesTail(ProductCategories $productCategories) : void;
    function visitProductHead(Product $product) : void;
    function visitProductTail(Product $product) : void;

    function visitProductsHead(Products $products) : void;
    function visitProductsTail(Products $products) : void;
}