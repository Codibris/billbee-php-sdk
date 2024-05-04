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

namespace BillbeeDe\BillbeeAPI\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * @template T
 */
class BaseResponse
{
    /**
     * @var array{Page: int, TotalPages: int, TotalRows: int, PageSize: int}
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("array<string, int>")]
    #[Serializer\SerializedName("Paging")]
    public $paging;

    /**
     * @var ?string
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("string")]
    #[Serializer\SerializedName("ErrorMessage")]
    public $errorMessage = null;

    /**
     * @var int
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("int")]
    #[Serializer\SerializedName("ErrorCode")]
    public $errorCode = 0;

    /**
     * @var T
     *
     * @deprecated Use getter/setter instead. Will be private in the next major version.
     */
    #[Serializer\Type("AsIs")]
    #[Serializer\SerializedName("Data")]
    public $data = null;

    /**
     * @return array{Page: int, TotalPages: int, TotalRows: int, PageSize: int}
     */
    public function getPaging(): array
    {
        return $this->paging;
    }

    /**
     * @param array{Page: int, TotalPages: int, TotalRows: int, PageSize: int} $paging
     * @return BaseResponse<T>
     */
    public function setPaging(array $paging): self
    {
        $this->paging = $paging;
        return $this;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @return BaseResponse<T>
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * @return BaseResponse<T>
     */
    public function setErrorCode(int $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return T
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param T $data
     * @return BaseResponse<T>
     */
    public function setData($data): self
    {
        $this->data = $data;
        return $this;
    }
}
