<?php

namespace ShopMagicVendor\Getresponse\Sdk\Operation\Campaigns\Blacklists\GetBlacklists;

use ShopMagicVendor\Getresponse\Sdk\Client\Operation\ValueList;
class GetBlacklistsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return ['masks'];
    }
}
