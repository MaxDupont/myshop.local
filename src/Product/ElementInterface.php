<?php

namespace Maksym\MyShop\Product;

use Maksym\MyShop\RecursiveView\CatalogVisitorInterface;

interface ElementInterface
{
    function acceptStart(CatalogVisitorInterface $catalogVisitor): void;
    function acceptFinish(CatalogVisitorInterface $catalogVisitor): void;
}