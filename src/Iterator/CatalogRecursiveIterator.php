<?php

namespace Maksym\MyShop\Iterator;

use Maksym\MyShop\Element\CatalogElementInterface;
use Maksym\MyShop\Visitor\CatalogVisitorInterface;

/**
 * Класс служит для рекурсивного обхода дерева каталога
 */
class CatalogRecursiveIterator
{
    /**
     * Метод проходит по дереву элементов. В первом параметре метод принимает главный элемент дерева, во втором - интерфейс Визитера.
     *
     * @param \Maksym\MyShop\Element\CatalogElementInterface $catalogElement
     * @param \Maksym\MyShop\Visitor\CatalogVisitorInterface $catalogVisitor
     *
     * @return void
     */
    public function go(CatalogElementInterface $catalogElement, CatalogVisitorInterface $catalogVisitor) : void
    {
        $catalogElement->acceptHead($catalogVisitor);
        $subElements = $catalogElement->getElements();

        $callback = fn (CatalogElementInterface $catalogElement) => $this->go($catalogElement, $catalogVisitor);

        array_walk($subElements, $callback);

        $catalogElement->acceptTail($catalogVisitor);
    }
}
