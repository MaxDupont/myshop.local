<?php

use Maksym\MyShop\Data\DataStorage;
use Maksym\MyShop\RecursiveView\CatalogRecursiveIterator;
use Maksym\MyShop\RecursiveView\ProductCategoryFinder;
use Maksym\MyShop\RecursiveView\ProductCategoryViewer;

error_reporting(-1);
require_once __DIR__ . "/vendor/autoload.php";

$catalog = DataStorage::getData();

$productCategoryFinder = new ProductCategoryFinder($_GET['ProductCategory']);
$recursiveIterator = new CatalogRecursiveIterator();
$catalogViewer = new ProductCategoryViewer();
$recursiveIterator->goRecursively($catalog, $productCategoryFinder);
$recursiveIterator->goRecursively($productCategoryFinder->getProductCategory(), $catalogViewer);