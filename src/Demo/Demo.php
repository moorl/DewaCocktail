<?php declare(strict_types=1);

namespace DewaCocktail\Demo;

use DewaShop\Core\System\DataExtension;
use DewaShop\Core\System\DataInterface;

class Demo extends DataExtension implements DataInterface
{
    public function getName(): string
    {
        return 'cocktail';
    }

    public function getType(): string
    {
        return 'demo';
    }

    public function getPath(): string
    {
        return __DIR__;
    }
}
