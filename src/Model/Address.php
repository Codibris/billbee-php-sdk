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

class Address
{
    /**
     * @var int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("BillbeeId")]
    public $id;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("City")]
    public $city;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("Street")]
    public $street;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("Company")]
    public $company;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("Line2")]
    public $line2;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("Line3")]
    public $line3;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("Zip")]
    public $zip;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("State")]
    public $state;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("Country")]
    public $country;

    /**
     * @var ?string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CountryISO2")
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("CountryISO2")]
    public $countryISO2;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("FirstName")]
    public $firstName;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("LastName")]
    public $lastName;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("Phone")]
    public $phone;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("Email")]
    public $email;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("HouseNumber")]
    public $houseNumber;

    /**
     * @var mixed
     * Not Mapped
     */
    public $comment;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("NameAddition")]
    public $nameAddition;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;
        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }

    public function getLine2(): ?string
    {
        return $this->line2;
    }

    public function setLine2(?string $line2): self
    {
        $this->line2 = $line2;
        return $this;
    }

    public function getLine3(): ?string
    {
        return $this->line3;
    }

    public function setLine3(?string $line3): self
    {
        $this->line3 = $line3;
        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip): self
    {
        $this->zip = $zip;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function getCountryISO2(): ?string
    {
        return $this->countryISO2;
    }

    public function setCountryISO2(?string $countryISO2): self
    {
        $this->countryISO2 = $countryISO2;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(?string $houseNumber): self
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    public function getNameAddition(): ?string
    {
        return $this->nameAddition;
    }

    public function setNameAddition(?string $nameAddition): self
    {
        $this->nameAddition = $nameAddition;
        return $this;
    }
}
