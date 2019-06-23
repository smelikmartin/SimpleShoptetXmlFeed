<?php

namespace SimpleShoptetXmlFeed\Item;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ShoptetShop
 * @package SimpleShoptetXmlFeed\Item
 * @Serializer\XmlRoot("SHOP")
 */
class ShoptetShop
{
    /**
     * @var array
     * @Serializer\XmlList(inline=true, entry="SHOPITEM")
     */
    private $items = [];

    /**
     * @param \SimpleShoptetXmlFeed\Item\ShoptetItem $item
     */
    public function addItem(ShoptetItem $item)
    {
        $this->items[] = $item;
    }
}
