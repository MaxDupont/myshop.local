<?php

use Maksym\MyShop\Data\DataStorage;
use Maksym\MyShop\Iterator\CatalogRecursiveIterator;
use Maksym\MyShop\Visitor\ErrorHandler;
use Maksym\MyShop\Visitor\ProductCategoryViewer;

require_once __DIR__ . "/vendor/autoload.php";

$dataStorage = new DataStorage();
$data = $dataStorage->getData();

$errorHandler = new ErrorHandler();
$catalogViewer = new ProductCategoryViewer();

$recursiveIterator = new CatalogRecursiveIterator();
$recursiveIterator->go($data, $errorHandler);
$recursiveIterator->go($data, $catalogViewer);