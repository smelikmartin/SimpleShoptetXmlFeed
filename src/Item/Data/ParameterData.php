<?php

namespace SimpleShoptetXmlFeed\Item\Data;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class ParameterData
 * @package SimpleShoptetXmlFeed\Item\Data
 */
class ParameterData
{
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @Serializer\XmlList(inline=true, entry="PARAMETER")
     */
    private $parameter;

    /**
     * ParameterData constructor.
     */
    public function __construct()
    {
        $this->parameter = new ArrayCollection();
    }

    /**
     * @param \SimpleShoptetXmlFeed\Item\Data\ParameterItemData $parameterItemData
     */
    public function addParameter(ParameterItemData $parameterItemData): void
    {
        $this->parameter->add($parameterItemData);
    }
}
