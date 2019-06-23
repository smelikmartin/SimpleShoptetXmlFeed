<?php

namespace SimpleShoptetXmlFeed\Item\Data;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class VariantItemData
 * @package SimpleShoptetXmlFeed\Item\Data
 */
class VariantItemData
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CODE")
     */
    private $code;

    /**
     * @var ParameterData
     * @Serializer\Type("SimpleShoptetXmlFeed\Item\Data\ParameterData")
     * @Serializer\SerializedName("PARAMETERS")
     * @Serializer\SkipWhenEmpty()
     */
    private $parameters;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EAN")
     * @Serializer\SkipWhenEmpty()
     */
    private $ean;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CURRENCY")
     * @Serializer\SkipWhenEmpty()
     */
    private $currency;

    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("VAT")
     * @Serializer\SkipWhenEmpty()
     */
    private $vat;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("PRICE")
     * @Serializer\SkipWhenEmpty()
     */
    private $price;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("PURCHASE_PRICE")
     * @Serializer\SkipWhenEmpty()
     */
    private $purchasePrice;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("STANDARD_PRICE")
     * @Serializer\SkipWhenEmpty()
     */
    private $standardPrice;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("PRICE_VAT")
     * @Serializer\SkipWhenEmpty()
     */
    private $priceVat;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AVAILABILITY")
     */
    private $availability;

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @param ParameterData $parameters
     */
    public function setParameters(ParameterData $parameters): void
    {
        $this->parameters = $parameters;
    }

    /**
     * @param string $ean
     */
    public function setEan(string $ean): void
    {
        $this->ean = $ean;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @param int $vat
     */
    public function setVat(int $vat): void
    {
        $this->vat = $vat;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @param float $purchasePrice
     */
    public function setPurchasePrice(float $purchasePrice): void
    {
        $this->purchasePrice = $purchasePrice;
    }

    /**
     * @param float $standardPrice
     */
    public function setStandardPrice(float $standardPrice): void
    {
        $this->standardPrice = $standardPrice;
    }

    /**
     * @param float $priceVat
     */
    public function setPriceVat(float $priceVat): void
    {
        $this->priceVat = $priceVat;
    }

    /**
     * @param string $availability
     */
    public function setAvailability(string $availability): void
    {
        $this->availability = $availability;
    }
}