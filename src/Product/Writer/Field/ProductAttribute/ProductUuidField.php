<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductAttribute;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\ReferenceField;

class ProductUuidField extends ReferenceField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('productUuid', 'product_uuid', 'product_attribute', $constraintBuilder);
    }
}