<?php

namespace Maksym\MyShop\Data;

use Maksym\MyShop\Element\CatalogElementInterface;
use Maksym\MyShop\Product\Catalog;
use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;

class DataStorage
{
    public static function getData(): CatalogElementInterface
    {
        return new Catalog(
            'Main catalog',
            new ProductCategories(
                [
                    new ProductCategory(
                        1,
                        'Игрушки',
                    ),
                    new ProductCategory(
                        2,
                        'Одежда',
                        new ProductCategories(
                            [
                                new ProductCategory(
                                    3,
                                    'Зимняя одежда',
                                    new ProductCategories(
                                        [
                                            new ProductCategory(4, 'Шубы'),
                                            new ProductCategory(5, 'Пальто')
                                        ]
                                    )
                                ),
                                new ProductCategory(6, 'Летняя одежда')
                            ]
                        )
                    ),
                    new ProductCategory(
                        7,
                        'Питание'
                    )
                ]
            ),
            'This is my first shop'
        );
    }
}