<?php

namespace SimpleShoptetXmlFeed\Item;

use JMS\Serializer\Annotation as Serializer;
use SimpleShoptetXmlFeed\Item\Data\AlternativeProductData;
use SimpleShoptetXmlFeed\Item\Data\CategoryData;
use SimpleShoptetXmlFeed\Item\Data\FlagsData;
use SimpleShoptetXmlFeed\Item\Data\ImageData;
use SimpleShoptetXmlFeed\Item\Data\RelatedProductData;
use SimpleShoptetXmlFeed\Item\Data\StockData;
use SimpleShoptetXmlFeed\Item\Data\TextPropertyData;
use SimpleShoptetXmlFeed\Item\Data\VariantData;

/**
 * Class ShoptetItem
 * @package SimpleShoptetXmlFeed\Item
 * @Serializer\XmlRoot("SHOPITEM")
 */
class ShoptetItem
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
     * @Serializer\SerializedName("CODE")
     */
    private $code;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("SHORT_DESCRIPTION")
     * @Serializer\SkipWhenEmpty()
     */
    private $shortDescription;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DESCRIPTION")
     * @Serializer\SkipWhenEmpty()
     */
    private $description;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MANUFACTURER")
     * @Serializer\SkipWhenEmpty()
     */
    private $manufacturer;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("WARRANTY")
     * @Serializer\SkipWhenEmpty()
     */
    private $warranty;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ITEM_TYPE")
     * @Serializer\SkipWhenEmpty()
     */
    private $itemType;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UNIT")
     * @Serializer\SkipWhenEmpty()
     */
    private $unit;

    /**
     * @var CategoryData
     * @Serializer\Type("SimpleShoptetXmlFeed\Item\Data\CategoryData")
     * @Serializer\SerializedName("CATEGORIES")
     * @Serializer\SkipWhenEmpty()
     */
    private $categories;

    /**
     * @var ImageData
     * @Serializer\Type("SimpleShoptetXmlFeed\Item\Data\ImageData")
     * @Serializer\SerializedName("IMAGES")
     * @Serializer\SkipWhenEmpty()
     */
    private $images;

    /**
     * @var TextPropertyData
     * @Serializer\Type("SimpleShoptetXmlFeed\Item\Data\TextPropertyData")
     * @Serializer\SerializedName("TEXT_PROPERTIES")
     * @Serializer\SkipWhenEmpty()
     */
    private $textProperties;

    /**
     * @var RelatedProductData
     * @Serializer\Type("SimpleShoptetXmlFeed\Item\Data\RelatedProductData")
     * @Serializer\SerializedName("RELATED_PRODUCTS")
     * @Serializer\SkipWhenEmpty()
     */
    private $relatedProducts;

    /**
     * @var AlternativeProductData
     * @Serializer\Type("SimpleShoptetXmlFeed\Item\Data\AlternativeProductData")
     * @Serializer\SerializedName("ALTERNATIVE_PRODUCTS")
     * @Serializer\SkipWhenEmpty()
     */
    private $alternativeProducts;

    /**
     * @var FlagsData
     * @Serializer\Type("SimpleShoptetXmlFeed\Item\Data\FlagsData")
     * @Serializer\SerializedName("FLAGS")
     * @Serializer\SkipWhenEmpty()
     */
    private $flags;

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
     * @Serializer\SerializedName("STANDARD_PRICE")
     * @Serializer\SkipWhenEmpty()
     */
    private $standardPrice;

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
     * @Serializer\SerializedName("PRICE_VAT")
     * @Serializer\SkipWhenEmpty()
     */
    private $priceVat;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("WEIGHT")
     * @Serializer\SkipWhenEmpty()
     */
    private $weight;

    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("VAT")
     * @Serializer\SkipWhenEmpty()
     */
    private $vat;

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
     * @var StockData
     * @Serializer\Type("SimpleShoptetXmlFeed\Item\Data\StockData")
     * @Serializer\SerializedName("STOCK")
     * @Serializer\SkipWhenEmpty()
     */
    private $stock;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AVAILABILITY")
     * @Serializer\SkipWhenEmpty()
     */
    private $availability;

    /**
     * @var VariantData
     * @Serializer\Type("SimpleShoptetXmlFeed\Item\Data\VariantData")
     * @Serializer\SerializedName("VARIANTS")
     * @Serializer\SkipWhenEmpty()
     */
    private $variants;

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code)
    {
        $this->code = $code;
    }

    /**
     * @param string $shortDescription
     */
    public function setShortDescription(string $shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @param string $manufacturer
     */
    public function setManufacturer(string $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @param string $warranty
     */
    public function setWarranty(string $warranty)
    {
        $this->warranty = $warranty;
    }
    /**
     * @param string $itemType
     */
    public function setItemType(string $itemType)
    {
        $this->itemType = $itemType;
    }

    /**
     * @param string $unit
     */
    public function setUnit(string $unit)
    {
        $this->unit = $unit;
    }

    /**
     * @param CategoryData $categoryData
     */
    public function setCategories(CategoryData $categoryData)
    {
        $this->categories = $categoryData;
    }

    /**
     * @param ImageData $images
     */
    public function setImages(ImageData $images)
    {
        $this->images = $images;
    }

    /**
     * @param \SimpleShoptetXmlFeed\Item\Data\TextPropertyData $textPropertyData
     */
    public function setTextProperties(TextPropertyData $textPropertyData)
    {
        $this->textProperties = $textPropertyData;
    }

    /**
     * @param \SimpleShoptetXmlFeed\Item\Data\RelatedProductData $relatedProductData
     */
    public function setRelatedProducts(RelatedProductData $relatedProductData)
    {
        $this->relatedProducts = $relatedProductData;
    }

    /**
     * @param \SimpleShoptetXmlFeed\Item\Data\AlternativeProductData $alternativeProducts
     */
    public function setAlternativeProducts(AlternativeProductData $alternativeProducts)
    {
        $this->alternativeProducts = $alternativeProducts;
    }

    /**
     * @param FlagsData $flags
     */
    public function setFlags(FlagsData $flags)
    {
        $this->flags = $flags;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    /**
     * @param float $standardPrice
     */
    public function setStandardPrice(float $standardPrice)
    {
        $this->standardPrice = $standardPrice;
    }

    /**
     * @param float $purchasePrice
     */
    public function setPurchasePrice(float $purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;
    }

    /**
     * @param float $priceVat
     */
    public function setPriceVat(float $priceVat)
    {
        $this->priceVat = $priceVat;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param int $vat
     */
    public function setVat(int $vat)
    {
        $this->vat = $vat;
    }

    /**
     * @param string $ean
     */
    public function setEan(string $ean)
    {
        $this->ean = $ean;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
    }

    /**
     * @param StockData $stockData
     */
    public function setStock(StockData $stockData)
    {
        $this->stock = $stockData;
    }

    /**
     * @param string $availability
     */
    public function setAvailability(string $availability)
    {
        $this->availability = $availability;
    }

    /**
     * @param VariantData $variants
     */
    public function setVariants(VariantData $variants)
    {
        $this->variants = $variants;
    }
}
