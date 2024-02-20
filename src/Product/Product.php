<?php

namespace Maksym\MyShop\Product;

use Maksym\MyShop\Element\CatalogElementInterface;
use Maksym\MyShop\Visitor\CatalogVisitorInterface;

class Product implements CatalogElementInterface
{
    public function __construct(
        private readonly int $id,
        private readonly string $label,
    )
    {
    }

    function acceptHead(CatalogVisitorInterface $catalogVisitor): void
    {
        $catalogVisitor->visitProductHead($this);
    }

    function acceptTail(CatalogVisitorInterface $catalogVisitor): void
    {
        $catalogVisitor->visitProductTail($this);
    }

    /**
     * @inheritDoc
     */
    public function getElements(): array
    {
        return [];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }
}