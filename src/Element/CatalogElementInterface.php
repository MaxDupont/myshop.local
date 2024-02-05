<?php

namespace Maksym\MyShop\Element;

use Maksym\MyShop\Visitor\CatalogVisitorInterface;

interface CatalogElementInterface
{
    function acceptHead(CatalogVisitorInterface $catalogVisitor): void;

    function acceptTail(CatalogVisitorInterface $catalogVisitor): void;

    /**
     * @return array<\Maksym\MyShop\Element\CatalogElementInterface>
     */
    public function getElements(): array;
}