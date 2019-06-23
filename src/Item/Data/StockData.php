<?php

namespace SimpleShoptetXmlFeed\Item\Data;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class StockData
 * @package SimpleShoptetXmlFeed\Item\Data
 */
class StockData
{
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("AMOUNT")
     */
    private $amount;

    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("MINIMAL_AMOUNT")
     * @Serializer\SkipWhenEmpty()
     */
    private $minimalAmount;

    /**
     * @param int $amount
     */
    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $minimalAmount
     */
    public function setMinimalAmount(int $minimalAmount)
    {
        $this->minimalAmount = $minimalAmount;
    }
}
