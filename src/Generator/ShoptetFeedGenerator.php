<?php

namespace SimpleShoptetXmlFeed\Generator;

use JMS\Serializer\SerializerBuilder;
use SimpleShoptetXmlFeed\Item\ShoptetShop;

/**
 * Class ShoptetFeedGenerator
 * @package SimpleShoptetXmlFeed\Generator
 */
class ShoptetFeedGenerator
{
    /**
     * @var \JMS\Serializer\SerializerInterface
     */
    private $serializerBuilder;

    /**
     * ShoptetFeedGenerator constructor.
     */
    public function __construct()
    {
        $this->serializerBuilder = SerializerBuilder::create()->build();
    }

    /**
     * @param \SimpleShoptetXmlFeed\Item\ShoptetShop $shop
     * @param string $filePath
     */
    public function generate(ShoptetShop $shop, string $filePath)
    {
        $xml = $this->serializerBuilder->serialize($shop, 'xml');
        file_put_contents($filePath, $xml, LOCK_EX);
    }
}
