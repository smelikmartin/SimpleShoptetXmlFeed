<?php

namespace SimpleShoptetXmlFeed\Item\Data;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class CategoryData
 * @package SimpleShoptetXmlFeed\Item\Data
 */
class CategoryData
{
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @Serializer\XmlList(inline=true, entry="CATEGORY")
     */
    private $category;

    /**
     * CategoryData constructor.
     */
    public function __construct()
    {
        $this->category = new ArrayCollection();
    }

    /**
     * @param string $category
     */
    public function addCategory(string $category): void
    {
        if (!$this->category->contains($category)) {
            $this->category->add($category);
        }
    }
}
