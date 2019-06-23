<?php

namespace SimpleShoptetXmlFeed\Item\Data;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class TextPropertyData
 * @package SimpleShoptetXmlFeed\Item\Data
 */
class TextPropertyData
{
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @Serializer\XmlList(inline=true, entry="TEXT_PROPERTY")
     */
    private $textProperty;

    /**
     * TextPropertyData constructor.
     */
    public function __construct()
    {
        $this->textProperty = new ArrayCollection();
    }

    /**
     * @param \SimpleShoptetXmlFeed\Item\Data\TextPropertyItemData $textPropertyItemData
     */
    public function addTextProperty(TextPropertyItemData $textPropertyItemData): void
    {
        $this->textProperty->add($textPropertyItemData);
    }
}
