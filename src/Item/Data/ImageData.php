<?php

namespace SimpleShoptetXmlFeed\Item\Data;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class ImageData
 * @package SimpleShoptetXmlFeed\Item\Data
 */
class ImageData
{
    /**
     * @var ArrayCollection
     * @Serializer\XmlList(inline=true, entry="IMAGE")
     */
    private $images;

    /**
     * ImageData constructor.
     */
    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    /**
     * @param string $image
     */
    public function addImage(string $image): void
    {
        if (!$this->images->contains($image)) {
            $this->images->add($image);
        }
    }
}
