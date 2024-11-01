<?php

namespace ShopMagicVendor\Getresponse\Sdk\Operation\SearchContacts\CreateSearchContact;

use ShopMagicVendor\Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use ShopMagicVendor\Getresponse\Sdk\Client\Operation\CommandOperation;
use ShopMagicVendor\Getresponse\Sdk\Client\Operation\Operation;
use ShopMagicVendor\Getresponse\Sdk\OperationVersionTrait;
use ShopMagicVendor\Getresponse\Sdk\Operation\Model\NewSearchContacts;
class CreateSearchContact extends CommandOperation
{
    use OperationVersionTrait;
    public const METHOD_URL = '/v3/search-contacts';
    /** @var NewSearchContacts */
    protected $data;
    /**
     * @param NewSearchContacts $data
     */
    public function __construct(NewSearchContacts $data)
    {
        $this->data = $data;
    }
    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->buildUrlFromTemplate();
    }
    /**
     * @return string
     */
    public function getMethod()
    {
        return Operation::POST;
    }
    /**
     * @return string
     * @throws InvalidCommandDataException
     */
    public function getBody()
    {
        return $this->encode($this->data->jsonSerialize());
    }
    /**
     * @return int
     */
    public function getSuccessCode()
    {
        return 201;
    }
}
