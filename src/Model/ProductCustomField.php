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

class ProductCustomField
{
    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("Id")]
    public $id;

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("DefinitionId")]
    public $definitionId;

    /**
     * @var ?CustomFieldDefinition
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("BillbeeDe\BillbeeAPI\Model\CustomFieldDefinition")]
    #[Serializer\SerializedName("Definition")]
    public $definition;

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("ArticleId")]
    public $articleId;

    /**
     * @var string|string[]|null
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("AsIs")]
    #[Serializer\SerializedName("Value")]
    public $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getDefinitionId(): ?int
    {
        return $this->definitionId;
    }

    public function setDefinitionId(?int $definitionId): self
    {
        $this->definitionId = $definitionId;
        return $this;
    }

    public function getDefinition(): ?CustomFieldDefinition
    {
        return $this->definition;
    }

    public function setDefinition(?CustomFieldDefinition $definition): self
    {
        $this->definition = $definition;
        return $this;
    }

    public function getArticleId(): ?int
    {
        return $this->articleId;
    }

    public function setArticleId(?int $articleId): self
    {
        $this->articleId = $articleId;
        return $this;
    }

    /** @return string[]|string|null */
    public function getValue()
    {
        return $this->value;
    }

    /** @param string[]|string|null $value */
    public function setValue($value): self
    {
        $this->value = $value;
        return $this;
    }
}
