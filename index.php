<?php

use Maksym\MyShop\Data\DataStorage;
use Maksym\MyShop\Iterator\CatalogRecursiveIterator;
use Maksym\MyShop\Visitor\ErrorHandler;
use Maksym\MyShop\Visitor\ProductCategoryViewer;

error_reporting(-1);
require_once __DIR__ . "/vendor/autoload.php";

$data = DataStorage::getData();

$errorHandler = new ErrorHandler();
$catalogViewer = new ProductCategoryViewer();

$recursiveIterator = new CatalogRecursiveIterator();
$recursiveIterator->go($data, $errorHandler);
$recursiveIterator->go($data, $catalogViewer);