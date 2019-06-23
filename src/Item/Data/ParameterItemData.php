<?php

namespace SimpleShoptetXmlFeed\Item\Data;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ParameterItemData
 * @package SimpleShoptetXmlFeed\Item\Data
 */
class ParameterItemData
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
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }
}
