<?php

namespace SimpleShoptetXmlFeed\Item\Data;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class AlternativeProductData
 * @package SimpleShoptetXmlFeed\Item\Data
 */
class AlternativeProductData
{
    /**
     * @var ArrayCollection
     * @Serializer\XmlList(inline=true, entry="CODE")
     */
    private $alternativeProducts;

    /**
     * AlternativeProductData constructor.
     */
    public function __construct()
    {
        $this->alternativeProducts = new ArrayCollection();
    }

    /**
     * @param string $product
     */
    public function addAlternativeProduct(string $product)
    {
        if (!$this->alternativeProducts->contains($product)) {
            $this->alternativeProducts->add($product);
        }
    }
}
