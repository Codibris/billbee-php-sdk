<?php
/**
 * This file is part of the Billbee API package.
 *
 * Copyright 2017 - now by Billbee GmbH
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 *
 * Created by Julian Finkler <julian@mintware.de>
 */

namespace BillbeeDe\BillbeeAPI\Model;

use BillbeeDe\BillbeeAPI\Type\ProductCondition;
use JMS\Serializer\Annotation as Serializer;

class Product
{
    // Product Types
    const TYPE_PRODUCT = 1;
    const TYPE_BUNDLE = 2;

    // VAT Indexes
    const VAT_INDEX_NORMAL = 1;
    const VAT_INDEX_REDUCED = 2;

    // Units
    const UNIT_PIECE = 1;
    const UNIT_PAIR = 15;
    const UNIT_GRAM = 16;
    const UNIT_100_GRAM = 4;
    const UNIT_KG = 2;
    const UNIT_MILLILITER = 6;
    const UNIT_LITER = 5;
    const UNIT_METER = 3;
    const UNIT_SQUARE_METER = 7;
    const UNIT_CUBIC_METER = 8;
    const UNIT_YARD = 9;
    const UNIT_FAT_QUARTER = 10;
    const UNIT_OUNCE = 11;
    const UNIT_LBS = 12;
    const UNIT_FLUID_OUNCE = 13;
    const UNIT_GALLON = 14;

    // Delivery Time
    const DELIVERY_NA = null;
    const DELIVERY_1_2_DAYS = 1;
    const DELIVERY_3_5_DAYS = 2;
    const DELIVERY_6_9_DAYS = 3;
    const DELIVERY_10_14_DAYS = 4;
    const DELIVERY_15_21_DAYS = 5;
    const DELIVERY_4_WEEKS = 6;
    const DELIVERY_5_WEEKS = 7;
    const DELIVERY_6_WEEKS = 8;
    const DELIVERY_7_WEEKS = 9;
    const DELIVERY_8_WEEKS = 10;
    const DELIVERY_9_WEEKS = 11;
    const DELIVERY_10_WEEKS = 12;

    // Recipient
    const RECIPIENT_NA = null;
    const RECIPIENT_BABIES = 1;
    const RECIPIENT_BABY_BOYS = 2;
    const RECIPIENT_BABY_GIRLS = 3;
    const RECIPIENT_WOMAN = 4;
    const RECIPIENT_PETS = 5;
    const RECIPIENT_DOGS = 6;
    const RECIPIENT_TEENAGERS = 7;
    const RECIPIENT_BOYS = 8;
    const RECIPIENT_CATS = 9;
    const RECIPIENT_CHILDREN = 10;
    const RECIPIENT_GIRLS = 11;
    const RECIPIENT_MEN = 12;
    const RECIPIENT_TEEN_BOYS = 13;
    const RECIPIENT_TEEN_GIRLS = 14;
    const RECIPIENT_UNISEX = 15;
    const RECIPIENT_BIRDS = 16;

    // Occasion
    const OCCASION_NA = null;
    const OCCASION_GRADUATION = 1;
    const OCCASION_SYMPATHY = 2;
    const OCCASION_BAR_OR_BAT_MITZVAH = 3;
    const OCCASION_CANADA_DAY = 4;
    const OCCASION_CHINESE_NEW_YEAR = 5;
    const OCCASION_CINCO_DE_MAYO = 6;
    const OCCASION_DAY_OF_THE_DEAD = 7;
    const OCCASION_JULY_4TH = 8;
    const OCCASION_EID = 9;
    const OCCASION_BIRTHDAY = 10;
    const OCCASION_GET_WELL = 11;
    const OCCASION_HALLOWEEN = 12;
    const OCCASION_HANUKKAH = 13;
    const OCCASION_HOUSEWARMING = 14;
    const OCCASION_WEDDING = 15;
    const OCCASION_ANNIVERSARY = 16;
    const OCCASION_CONFIRMATION = 17;
    const OCCASION_KWANZAA = 18;
    const OCCASION_MOTHERS_DAY = 19;
    const OCCASION_NEW_BABY = 20;
    const OCCASION_NEW_YEARS = 21;
    const OCCASION_EASTER = 22;
    const OCCASION_PROM = 23;
    const OCCASION_QUINCEANERA = 24;
    const OCCASION_RETIREMENT = 25;
    const OCCASION_ST_PATRICKS_DAY = 26;
    const OCCASION_SWEET_16 = 27;
    const OCCASION_BAPTISM = 28;
    const OCCASION_THANKSGIVING = 29;
    const OCCASION_VALENTINES = 30;
    const OCCASION_FATHERS_DAY = 31;
    const OCCASION_ENGAGEMENT = 32;
    const OCCASION_CHRISTMAS = 33;

    /**
     * @var int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("Id")]
    public $id;

    /**
     * @var int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("Type")]
    public $type = Product::TYPE_PRODUCT;

    /**
     * @var TranslatableText[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\TranslatableText>")]
    #[Serializer\SerializedName("Title")]
    public $title = null;

    /**
     * @var TranslatableText[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\TranslatableText>")]
    #[Serializer\SerializedName("InvoiceText")]
    public $invoiceText = [];

    /**
     * @var TranslatableText[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\TranslatableText>")]
    #[Serializer\SerializedName("ShortDescription")]
    public $shortDescription = [];

    /**
     * @var Image[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\Image>")]
    #[Serializer\SerializedName("Images")]
    public $images = [];

    /**
     * @var TranslatableText[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\TranslatableText>")]
    #[Serializer\SerializedName("Description")]
    public $description = [];

    /**
     * @var TranslatableText[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\TranslatableText>")]
    #[Serializer\SerializedName("BasicAttributes")]
    public $attributes = [];

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("SKU")]
    public $sku = null;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("EAN")]
    public $ean = null;

    /**
     * @var ?Source[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\Source>")]
    #[Serializer\SerializedName("Sources")]
    public $sources = [];

    /**
     * @var ?Category
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("BillbeeDe\BillbeeAPI\Model\Category")]
    #[Serializer\SerializedName("Category1")]
    public $category1 = null;

    /**
     * @var ?Category
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("BillbeeDe\BillbeeAPI\Model\Category")]
    #[Serializer\SerializedName("Category2")]
    public $category2 = null;

    /**
     * @var ?Category
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("BillbeeDe\BillbeeAPI\Model\Category")]
    #[Serializer\SerializedName("Category3")]
    public $category3 = null;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("Manufacturer")]
    public $manufacturer = null;

    /**
     * @var int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("VatIndex")]
    public $vatIndex = Product::VAT_INDEX_NORMAL;

    /**
     * @var float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("Price")]
    public $price = 0.00;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("CostPrice")]
    public $costPrice = null;

    /**
     * @var float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("Vat1Rate")]
    public $vatRateNormal = 0.00;

    /**
     * @var float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("Vat2Rate")]
    public $vatRateReduced = 0.00;

    /**
     * @var TranslatableText[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\TranslatableText>")]
    #[Serializer\SerializedName("Materials")]
    public $materials = [];

    /**
     * @var TranslatableText[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\TranslatableText>")]
    #[Serializer\SerializedName("Tags")]
    public $tags = [];

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("StockDesired")]
    public $stockDesired = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("StockCurrent")]
    public $stockCurrent = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("StockWarning")]
    public $stockWarning = null;

    /**
     * @var bool
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("bool")]
    #[Serializer\SerializedName("LowStock")]
    public $lowStock = false;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("StockCode")]
    public $stockCode = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("StockReduceItemsPerSale")]
    public $stockReduceItemsPerSale = null;

    /**
     * @var StockProduct[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\StockProduct>")]
    #[Serializer\SerializedName("Stocks")]
    public $stocks = [];

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("Weight")]
    public $weight = null;

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("WeightNet")]
    public $weightNet = null;

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("Unit")]
    public $unit = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("UnitsPerItem")]
    public $unitsPerItem = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("SoldAmount")]
    public $soldAmount = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("SoldSumGross")]
    public $soldSumGross = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("SoldSumNet")]
    public $soldSumNet = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("SoldSumNetLast30Days")]
    public $soldSumNetLast30Days = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("SoldSumGrossLast30Days")]
    public $soldSumGrossLast30Days = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("SoldAmountLast30Days")]
    public $soldAmountLast30Days = null;

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("ShippingProductId")]
    public $shippingProductId = null;

    /**
     * @var bool
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("bool")]
    #[Serializer\SerializedName("IsDigital")]
    public $isDigital = false;

    /**
     * @var bool
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("bool")]
    #[Serializer\SerializedName("IsCustomizable")]
    public $isCustomizable = false;

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("DeliveryTime")]
    public $deliveryTime = null;

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("Recipient")]
    public $recipient = null;

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("Occasion")]
    public $occasion = null;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("CountryOfOrigin")]
    public $countryOfOrigin = null;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("ExportDescription")]
    public $exportDescription = null;

    /**
     * @var TranslatableText[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\TranslatableText>")]
    #[Serializer\SerializedName("ExportDescriptionMultiLanguage")]
    private $exportDescriptionMultiLanguage = [];

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("TaricNumber")]
    public $taricNumber = null;

    /**
     * @var ProductCustomField[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\ProductCustomField>")]
    #[Serializer\SerializedName("CustomFields")]
    public $customFields = [];

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     *
     * @see ProductCondition
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("Condition")]
    public $condition = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("WidthCm")]
    public $widthCm;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("LengthCm")]
    public $lengthCm;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("HeightCm")]
    public $heightCm;

    /**
     * @var ?BillOfMaterialProduct[]
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<BillbeeDe\BillbeeAPI\Model\BillOfMaterialProduct>")]
    #[Serializer\SerializedName("BillOfMaterial")]
    public $billOfMaterial = null;

    /**
     * @var ?bool
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("bool")]
    #[Serializer\SerializedName("IsDeactivated")]
    private $isDeactivated = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;
        return $this;
    }

    /** @return ?TranslatableText[] */
    public function getTitle(): ?array
    {
        return $this->title;
    }

    /** @param ?TranslatableText[] $title */
    public function setTitle(?array $title): self
    {
        $this->title = $title;
        return $this;
    }

    /** @return TranslatableText[] */
    public function getInvoiceText(): array
    {
        return $this->invoiceText;
    }

    /** @param TranslatableText[] $invoiceText */
    public function setInvoiceText(array $invoiceText): self
    {
        $this->invoiceText = $invoiceText;
        return $this;
    }

    /** @return TranslatableText[] */
    public function getShortDescription(): array
    {
        return $this->shortDescription;
    }

    /** @param TranslatableText[] $shortDescription */
    public function setShortDescription(array $shortDescription): self
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /** @return Image[] */
    public function getImages(): array
    {
        return $this->images;
    }

    /** @param Image[] $images */
    public function setImages(array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /** @return TranslatableText[] */
    public function getDescription(): array
    {
        return $this->description;
    }

    /** @param TranslatableText[] $description */
    public function setDescription(array $description): self
    {
        $this->description = $description;
        return $this;
    }

    /** @return TranslatableText[] */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /** @param TranslatableText[] $attributes */
    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): self
    {
        $this->ean = $ean;
        return $this;
    }

    /** @return ?Source[] */
    public function getSources(): ?array
    {
        return $this->sources;
    }

    /** @param ?Source[] $sources */
    public function setSources(?array $sources): self
    {
        $this->sources = $sources;
        return $this;
    }

    public function getCategory1(): ?Category
    {
        return $this->category1;
    }

    public function setCategory1(?Category $category1): self
    {
        $this->category1 = $category1;
        return $this;
    }

    public function getCategory2(): ?Category
    {
        return $this->category2;
    }

    public function setCategory2(?Category $category2): self
    {
        $this->category2 = $category2;
        return $this;
    }

    public function getCategory3(): ?Category
    {
        return $this->category3;
    }

    public function setCategory3(?Category $category3): self
    {
        $this->category3 = $category3;
        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getVatIndex(): int
    {
        return $this->vatIndex;
    }

    public function setVatIndex(int $vatIndex): self
    {
        $this->vatIndex = $vatIndex;
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getCostPrice(): ?float
    {
        return $this->costPrice;
    }

    public function setCostPrice(?float $costPrice): self
    {
        $this->costPrice = $costPrice;
        return $this;
    }

    public function getVatRateNormal(): float
    {
        return $this->vatRateNormal;
    }

    public function setVatRateNormal(float $vatRateNormal): self
    {
        $this->vatRateNormal = $vatRateNormal;
        return $this;
    }

    public function getVatRateReduced(): float
    {
        return $this->vatRateReduced;
    }

    public function setVatRateReduced(float $vatRateReduced): self
    {
        $this->vatRateReduced = $vatRateReduced;
        return $this;
    }

    /** @return TranslatableText[] */
    public function getMaterials(): array
    {
        return $this->materials;
    }

    /** @param TranslatableText[] $materials */
    public function setMaterials(array $materials): self
    {
        $this->materials = $materials;
        return $this;
    }

    /** @return TranslatableText[] */
    public function getTags(): array
    {
        return $this->tags;
    }

    /** @param TranslatableText[] $tags */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    public function getStockDesired(): ?float
    {
        return $this->stockDesired;
    }

    public function setStockDesired(?float $stockDesired): self
    {
        $this->stockDesired = $stockDesired;
        return $this;
    }

    public function getStockCurrent(): ?float
    {
        return $this->stockCurrent;
    }

    public function setStockCurrent(?float $stockCurrent): self
    {
        $this->stockCurrent = $stockCurrent;
        return $this;
    }

    public function getStockWarning(): ?float
    {
        return $this->stockWarning;
    }

    public function setStockWarning(?float $stockWarning): self
    {
        $this->stockWarning = $stockWarning;
        return $this;
    }

    public function isLowStock(): bool
    {
        return $this->lowStock;
    }

    public function setLowStock(bool $lowStock): self
    {
        $this->lowStock = $lowStock;
        return $this;
    }

    public function getStockCode(): ?string
    {
        return $this->stockCode;
    }

    public function setStockCode(?string $stockCode): self
    {
        $this->stockCode = $stockCode;
        return $this;
    }

    public function getStockReduceItemsPerSale(): ?float
    {
        return $this->stockReduceItemsPerSale;
    }

    public function setStockReduceItemsPerSale(?float $stockReduceItemsPerSale): self
    {
        $this->stockReduceItemsPerSale = $stockReduceItemsPerSale;
        return $this;
    }

    /** @return StockProduct[] */
    public function getStocks(): array
    {
        return $this->stocks;
    }

    /** @param StockProduct[] $stocks */
    public function setStocks(array $stocks): self
    {
        $this->stocks = $stocks;
        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    public function getWeightNet(): ?int
    {
        return $this->weightNet;
    }

    public function setWeightNet(?int $weightNet): self
    {
        $this->weightNet = $weightNet;
        return $this;
    }

    public function getUnit(): ?int
    {
        return $this->unit;
    }

    public function setUnit(?int $unit): self
    {
        $this->unit = $unit;
        return $this;
    }

    public function getUnitsPerItem(): ?float
    {
        return $this->unitsPerItem;
    }

    public function setUnitsPerItem(?float $unitsPerItem): self
    {
        $this->unitsPerItem = $unitsPerItem;
        return $this;
    }

    public function getSoldAmount(): ?float
    {
        return $this->soldAmount;
    }

    public function setSoldAmount(?float $soldAmount): self
    {
        $this->soldAmount = $soldAmount;
        return $this;
    }

    public function getSoldSumGross(): ?float
    {
        return $this->soldSumGross;
    }

    public function setSoldSumGross(?float $soldSumGross): self
    {
        $this->soldSumGross = $soldSumGross;
        return $this;
    }

    public function getSoldSumNet(): ?float
    {
        return $this->soldSumNet;
    }

    public function setSoldSumNet(?float $soldSumNet): self
    {
        $this->soldSumNet = $soldSumNet;
        return $this;
    }

    public function getSoldSumNetLast30Days(): ?float
    {
        return $this->soldSumNetLast30Days;
    }

    public function setSoldSumNetLast30Days(?float $soldSumNetLast30Days): self
    {
        $this->soldSumNetLast30Days = $soldSumNetLast30Days;
        return $this;
    }

    public function getSoldSumGrossLast30Days(): ?float
    {
        return $this->soldSumGrossLast30Days;
    }

    public function setSoldSumGrossLast30Days(?float $soldSumGrossLast30Days): self
    {
        $this->soldSumGrossLast30Days = $soldSumGrossLast30Days;
        return $this;
    }

    public function getSoldAmountLast30Days(): ?float
    {
        return $this->soldAmountLast30Days;
    }

    public function setSoldAmountLast30Days(?float $soldAmountLast30Days): self
    {
        $this->soldAmountLast30Days = $soldAmountLast30Days;
        return $this;
    }

    public function getShippingProductId(): ?int
    {
        return $this->shippingProductId;
    }

    public function setShippingProductId(?int $shippingProductId): self
    {
        $this->shippingProductId = $shippingProductId;
        return $this;
    }

    public function isDigital(): bool
    {
        return $this->isDigital;
    }

    public function setIsDigital(bool $isDigital): self
    {
        $this->isDigital = $isDigital;
        return $this;
    }

    public function isCustomizable(): bool
    {
        return $this->isCustomizable;
    }

    public function setIsCustomizable(bool $isCustomizable): self
    {
        $this->isCustomizable = $isCustomizable;
        return $this;
    }

    public function getDeliveryTime(): ?int
    {
        return $this->deliveryTime;
    }

    public function setDeliveryTime(?int $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    public function getRecipient(): ?int
    {
        return $this->recipient;
    }

    public function setRecipient(?int $recipient): self
    {
        $this->recipient = $recipient;
        return $this;
    }

    public function getOccasion(): ?int
    {
        return $this->occasion;
    }

    public function setOccasion(?int $occasion): self
    {
        $this->occasion = $occasion;
        return $this;
    }

    public function getCountryOfOrigin(): ?string
    {
        return $this->countryOfOrigin;
    }

    public function setCountryOfOrigin(?string $countryOfOrigin): self
    {
        $this->countryOfOrigin = $countryOfOrigin;
        return $this;
    }

    public function getExportDescription(): ?string
    {
        return $this->exportDescription;
    }

    public function setExportDescription(?string $exportDescription): self
    {
        $this->exportDescription = $exportDescription;
        return $this;
    }

    /** @return TranslatableText[] */
    public function getExportDescriptionMultiLanguage(): array
    {
        return $this->exportDescriptionMultiLanguage;
    }

    /** @param TranslatableText[] $exportDescriptionMultiLanguage */
    public function setExportDescriptionMultiLanguage(array $exportDescriptionMultiLanguage): self
    {
        $this->exportDescriptionMultiLanguage = $exportDescriptionMultiLanguage;
        return $this;
    }

    public function getTaricNumber(): ?string
    {
        return $this->taricNumber;
    }

    public function setTaricNumber(?string $taricNumber): self
    {
        $this->taricNumber = $taricNumber;
        return $this;
    }

    /** @return ProductCustomField[] */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /** @param ProductCustomField[] $customFields */
    public function setCustomFields(array $customFields): self
    {
        $this->customFields = $customFields;
        return $this;
    }

    public function getCondition(): ?int
    {
        return $this->condition;
    }

    public function setCondition(?int $condition): self
    {
        $this->condition = $condition;
        return $this;
    }

    public function getWidthCm(): ?float
    {
        return $this->widthCm;
    }

    public function setWidthCm(?float $widthCm): self
    {
        $this->widthCm = $widthCm;
        return $this;
    }

    public function getLengthCm(): ?float
    {
        return $this->lengthCm;
    }

    public function setLengthCm(?float $lengthCm): self
    {
        $this->lengthCm = $lengthCm;
        return $this;
    }

    public function getHeightCm(): ?float
    {
        return $this->heightCm;
    }

    public function setHeightCm(?float $heightCm): self
    {
        $this->heightCm = $heightCm;
        return $this;
    }

    /** @return ?BillOfMaterialProduct[] */
    public function getBillOfMaterial(): ?array
    {
        return $this->billOfMaterial;
    }

    /** @param ?BillOfMaterialProduct[] $billOfMaterial */
    public function setBillOfMaterial(?array $billOfMaterial): self
    {
        $this->billOfMaterial = $billOfMaterial;
        return $this;
    }

    public function getIsDeactivated(): ?bool
    {
        return $this->isDeactivated;
    }

    public function setIsDeactivated(?bool $isDeactivated): self
    {
        $this->isDeactivated = $isDeactivated;
        return $this;
    }
}
