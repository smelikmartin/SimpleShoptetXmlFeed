<?php

namespace SimpleShoptetXmlFeed\Item\Data;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class VariantData
 * @package SimpleShoptetXmlFeed\Item\Data
 */
class VariantData
{
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @Serializer\XmlList(inline=true, entry="VARIANT")
     */
    private $variant;

    /**
     * VariantData constructor.
     */
    public function __construct()
    {
        $this->variant = new ArrayCollection();
    }

    /**
     * @param VariantItemData $variantItemData
     */
    public function addVariant(VariantItemData $variantItemData)
    {
        $this->variant->add($variantItemData);
    }
}
