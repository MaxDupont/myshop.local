<?php

use Maksym\MyShop\Data\DataStorage;
use Maksym\MyShop\RecursiveView\CatalogRecursiveIterator;
use Maksym\MyShop\RecursiveView\ErrorHandler;
use Maksym\MyShop\RecursiveView\ProductCategoryViewer;

error_reporting(-1);
require_once __DIR__ . "/vendor/autoload.php";

$catalog = DataStorage::getData();

$errorHandler = new ErrorHandler();
$catalogViewer = new ProductCategoryViewer();

$recursiveIterator = new CatalogRecursiveIterator();
$recursiveIterator->goRecursively($catalog, $errorHandler);
$recursiveIterator->goRecursively($catalog, $catalogViewer);