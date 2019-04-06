<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping\Table;
use Sylius\Component\Core\Model\ProductTranslation as BaseProductTranslation;

/**
 * @MappedSuperclass
 * @Table(name="sylius_product_translation")
 */
class ProductTranslation extends BaseProductTranslation
{
}
