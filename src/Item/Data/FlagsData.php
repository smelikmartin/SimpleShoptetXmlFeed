<?php

namespace SimpleShoptetXmlFeed\Item\Data;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class FlagsData
 * @package SimpleShoptetXmlFeed\Item\Data
 */
class FlagsData
{
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("ACTION")
     * @Serializer\SkipWhenEmpty()
     */
    private $action;

    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("NEW")
     * @Serializer\SkipWhenEmpty()
     */
    private $new;

    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("TIP")
     * @Serializer\SkipWhenEmpty()
     */
    private $tip;

    /**
     * @param bool $action
     */
    public function setAction(bool $action): void
    {
        $this->action = (int)$action;
    }

    /**
     * @param bool $new
     */
    public function setNew(bool $new): void
    {
        $this->new = (int)$new;
    }

    /**
     * @param bool $tip
     */
    public function setTip(bool $tip): void
    {
        $this->tip = (int)$tip;
    }
}
