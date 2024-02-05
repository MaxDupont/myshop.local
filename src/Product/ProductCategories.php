<?php

declare(strict_types = 1);

namespace Maksym\MyShop\Product;

use Maksym\MyShop\Element\CatalogElementInterface;
use Maksym\MyShop\Visitor\CatalogVisitorInterface;

class ProductCategories implements CatalogElementInterface
{
    public function __construct(
        private readonly array $elements = [],
    ) {
    }

    function acceptHead(CatalogVisitorInterface $catalogVisitor): void
    {
        $catalogVisitor->visitProductCategoriesHead($this);
    }

    function acceptTail(CatalogVisitorInterface $catalogVisitor): void
    {
        $catalogVisitor->visitProductCategoriesTail($this);
    }

    /**
     * @inheritDoc
     */
    public function getElements(): array
    {
        return $this->elements;
    }
}
