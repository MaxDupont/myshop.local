<?php

use Maksym\MyShop\Data\DataStorage;
use Maksym\MyShop\Iterator\CatalogRecursiveIterator;
use Maksym\MyShop\Visitor\ProductCategoryFinder;
use Maksym\MyShop\Visitor\ProductCategoryViewer;

error_reporting(-1);
require_once __DIR__ . "/vendor/autoload.php";

$data = DataStorage::getData();

$productCategoryFinder = new ProductCategoryFinder($_GET['ProductCategory']);
$recursiveIterator = new CatalogRecursiveIterator();
$catalogViewer = new ProductCategoryViewer();
$recursiveIterator->go($data, $productCategoryFinder);
$recursiveIterator->go($productCategoryFinder->getProductCategory(), $catalogViewer);