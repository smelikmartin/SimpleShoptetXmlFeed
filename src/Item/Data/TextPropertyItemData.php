<?php

namespace SimpleShoptetXmlFeed\Item\Data;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class TextPropertyItemData
 * @package SimpleShoptetXmlFeed\Item\Data
 */
class TextPropertyItemData
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("NAME")
     */
    private $name;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("VALUE")
     */
    private $value;

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
