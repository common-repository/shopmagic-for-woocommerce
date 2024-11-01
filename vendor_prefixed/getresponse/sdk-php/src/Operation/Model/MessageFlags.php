<?php

namespace ShopMagicVendor\Getresponse\Sdk\Operation\Model;

use ShopMagicVendor\Getresponse\Sdk\Client\Operation\BaseEnum;
class MessageFlags extends BaseEnum
{
    public const OPENRATE = 'openrate';
    public const CLICKTRACK = 'clicktrack';
    public const GOOGLE_ANALYTICS = 'google_analytics';
    /**
     * @return boolean
     */
    public function isMultiple()
    {
        return \true;
    }
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [self::OPENRATE, self::CLICKTRACK, self::GOOGLE_ANALYTICS];
    }
    public function jsonSerialize(): array
    {
        return $this->value;
    }
}
