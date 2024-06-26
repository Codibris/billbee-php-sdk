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

class Image
{
    /**
     * @var int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("Id")]
    public $id;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("Url")]
    public $url = '';

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("ThumbPathExt")]
    public $thumbPathExt = '';

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("ThumbUrl")]
    public $thumbUrl = '';

    /**
     * @var ?int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("Position")]
    public $position;

    /**
     * @var bool
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("bool")]
    #[Serializer\SerializedName("IsDefault")]
    public $isDefault = true;

    /**
     * @var int
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("ArticleId")]
    private $articleId = 0;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getThumbPathExt(): ?string
    {
        return $this->thumbPathExt;
    }

    public function setThumbPathExt(?string $thumbPathExt): self
    {
        $this->thumbPathExt = $thumbPathExt;
        return $this;
    }

    public function getThumbUrl(): ?string
    {
        return $this->thumbUrl;
    }

    public function setThumbUrl(?string $thumbUrl): self
    {
        $this->thumbUrl = $thumbUrl;
        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }

    public function isDefault(): bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function getArticleId(): int
    {
        return $this->articleId;
    }

    public function setArticleId(int $articleId): self
    {
        $this->articleId = $articleId;
        return $this;
    }
}
