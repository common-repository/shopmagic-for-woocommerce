<?php

namespace ShopMagicVendor\Getresponse\Sdk\Operation\Suppressions\GetSuppression;

use ShopMagicVendor\Getresponse\Sdk\Client\Operation\ValueList;
class GetSuppressionFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return ['suppressionId', 'name', 'createdOn', 'href', 'masks'];
    }
}