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

use JMS\Serializer\Annotation as Serializer;

class Source
{
    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("Id")]
    public $id = null;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("Source")]
    public $source;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("SourceId")]
    public $sourceId;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("ApiAccountName")]
    public $apiAccountName;

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("ApiAccountId")]
    public $apiAccountId = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("ExportFactor")]
    public $exportFactor = null;

    /**
     * @var ?bool
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("bool")]
    #[Serializer\SerializedName("StockSyncInactive")]
    public $stockSyncInactive;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("StockSyncMin")]
    public $stockSyncMin = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("StockSyncMax")]
    public $stockSyncMax = null;

    /**
     * @var ?float
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("float")]
    #[Serializer\SerializedName("UnitsPerItem")]
    public $unitsPerItem;

    /**
     * @var ?array<string, mixed>
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array")]
    #[Serializer\SerializedName("Custom")]
    public $custom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    public function setSourceId(?string $sourceId): self
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    public function getApiAccountName(): ?string
    {
        return $this->apiAccountName;
    }

    public function setApiAccountName(?string $apiAccountName): self
    {
        $this->apiAccountName = $apiAccountName;
        return $this;
    }

    public function getApiAccountId(): ?int
    {
        return $this->apiAccountId;
    }

    public function setApiAccountId(?int $apiAccountId): self
    {
        $this->apiAccountId = $apiAccountId;
        return $this;
    }

    public function getExportFactor(): ?float
    {
        return $this->exportFactor;
    }

    public function setExportFactor(?float $exportFactor): self
    {
        $this->exportFactor = $exportFactor;
        return $this;
    }

    public function getStockSyncInactive(): ?bool
    {
        return $this->stockSyncInactive;
    }

    public function setStockSyncInactive(?bool $stockSyncInactive): self
    {
        $this->stockSyncInactive = $stockSyncInactive;
        return $this;
    }

    public function getStockSyncMin(): ?float
    {
        return $this->stockSyncMin;
    }

    public function setStockSyncMin(?float $stockSyncMin): self
    {
        $this->stockSyncMin = $stockSyncMin;
        return $this;
    }

    public function getStockSyncMax(): ?float
    {
        return $this->stockSyncMax;
    }

    public function setStockSyncMax(?float $stockSyncMax): self
    {
        $this->stockSyncMax = $stockSyncMax;
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

    /** @return ?array<string, mixed> */
    public function getCustom(): ?array
    {
        return $this->custom;
    }

    /** @param ?array<string, mixed> $custom */
    public function setCustom(?array $custom): self
    {
        $this->custom = $custom;
        return $this;
    }
}
