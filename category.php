<?php

use Maksym\MyShop\Data\DataStorage;
use Maksym\MyShop\Iterator\CatalogRecursiveIterator;
use Maksym\MyShop\Visitor\ProductCategoryFinder;
use Maksym\MyShop\Visitor\ProductCategoryViewer;

require_once __DIR__ . "/vendor/autoload.php";

$dataStorage = new DataStorage();
$data = $_GET['ProductMode'] === '1' ? $dataStorage->buildCatalogWithProducts() : $dataStorage->buildCatalog();

$productCategoryFinder = new ProductCategoryFinder($_GET['ProductCategory']);
$recursiveIterator = new CatalogRecursiveIterator();
$catalogViewer = new ProductCategoryViewer();
$recursiveIterator->go($data, $productCategoryFinder);
$recursiveIterator->go($productCategoryFinder->getProductCategory(), $catalogViewer);