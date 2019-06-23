<?php

namespace SimpleShoptetXmlFeed\Item\Data;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class RelatedProductData
 * @package SimpleShoptetXmlFeed\Item\Data
 */
class RelatedProductData
{
    /**
     * @var ArrayCollection
     * @Serializer\XmlList(inline=true, entry="CODE")
     */
    private $relatedProducts;

    /**
     * RelatedProductData constructor.
     */
    public function __construct()
    {
        $this->relatedProducts = new ArrayCollection();
    }

    /**
     * @param string $relatedProduct
     */
    public function addRelatedProduct(string $relatedProduct)
    {
        if (!$this->relatedProducts->contains($relatedProduct)) {
            $this->relatedProducts->add($relatedProduct);
        }
    }
}
