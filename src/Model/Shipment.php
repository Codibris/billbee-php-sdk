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

class Shipment
{
    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("ShippingId")]
    public $shippingId;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("OrderId")]
    public $orderId;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("Comment")]
    public $comment;

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("ShippingProviderId")]
    public $shippingProviderId;

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("ShippingProviderProductId")]
    public $shippingProductId;

    /**
     * @var ?int
     *
     * @see \BillbeeDe\BillbeeAPI\Type\ShippingCarrier
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("CarrierId")]
    private $carrierId;

    /**
     * @var ?int
     *
     * @see \BillbeeDe\BillbeeAPI\Type\ShipmentType
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("ShipmentType")]
    private $type;

    /**
     * Creates a shipment based on models
     *
     * @param ShippingProvider $provider The provider
     * @param ShippingProduct $product The product
     * @return Shipment The Shipment
     */
    public static function fromProviderAndProduct(ShippingProvider $provider, ShippingProduct $product): Shipment
    {
        return (new Shipment())
            ->setShippingProviderId($provider->getId())
            ->setShippingProductId($product->getId());
    }

    public function getShippingId(): ?string
    {
        return $this->shippingId;
    }

    public function setShippingId(?string $shippingId): self
    {
        $this->shippingId = $shippingId;
        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function getShippingProviderId(): ?int
    {
        return $this->shippingProviderId;
    }

    public function setShippingProviderId(?int $shippingProviderId): self
    {
        $this->shippingProviderId = $shippingProviderId;
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

    public function getCarrierId(): ?int
    {
        return $this->carrierId;
    }

    public function setCarrierId(?int $carrierId): self
    {
        $this->carrierId = $carrierId;
        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;
        return $this;
    }
}
