<?php

namespace SimpleShoptetXmlFeed\Item;

/**
 * Class ShoptetVariantItem
 * @package SimpleShoptetXmlFeeed\Item
 */
class ShoptetVariantItem
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var array
     */
    private $parameters;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $vat;

    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $purchasePrice;

    /**
     * @var float
     */
    private $standardPrice;

    /**
     * @var float
     */
    private $priceVat;

    /**
     * @var string
     */
    private $availability;

    /**
     * @var string
     */
    private $ean;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     */
    public function addParameters(array $parameters): void
    {
        $this->parameters[] = $parameters;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getVat(): string
    {
        return $this->vat;
    }

    /**
     * @param string $vat
     */
    public function setVat(string $vat): void
    {
        $this->vat = $vat;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPurchasePrice(): float
    {
        return $this->purchasePrice;
    }

    /**
     * @param float $purchasePrice
     */
    public function setPurchasePrice(float $purchasePrice): void
    {
        $this->purchasePrice = $purchasePrice;
    }

    /**
     * @return float
     */
    public function getStandardPrice(): float
    {
        return $this->standardPrice;
    }

    /**
     * @param float $standardPrice
     */
    public function setStandardPrice(float $standardPrice): void
    {
        $this->standardPrice = $standardPrice;
    }

    /**
     * @return float
     */
    public function getPriceVat(): float
    {
        return $this->priceVat;
    }

    /**
     * @param float $priceVat
     */
    public function setPriceVat(float $priceVat): void
    {
        $this->priceVat = $priceVat;
    }

    /**
     * @return string
     */
    public function getAvailability(): string
    {
        return $this->availability;
    }

    /**
     * @param string $availability
     */
    public function setAvailability(string $availability): void
    {
        $this->availability = $availability;
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan(string $ean): void
    {
        $this->ean = $ean;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        $data = [];
        $data['CODE'] = $this->getCode();
        $data['PARAMETERS'] = $this->getParameters();
        $data['CURRENCY'] = $this->getCurrency();
        $data['VAT'] = $this->getVat();
        $data['PRICE'] = $this->getPrice();

        if ($this->getPurchasePrice() !== null) {
            $data['PURCHASE_PRICE'] = $this->getPurchasePrice();
        }

        if ($this->getStandardPrice() !== null) {
            $data['STANDARD_PRICE'] = $this->getStandardPrice();
        }

        if ($this->getPriceVat() !== null) {
            $data['PRICE_VAT'] = $this->getPriceVat();
        }

        if ($this->getEan() !== null) {
            $data['EAN'] = $this->getEan();
        }

        $data['AVAILABILITY'] = $this->getAvailability();

        return $data;
    }
}
