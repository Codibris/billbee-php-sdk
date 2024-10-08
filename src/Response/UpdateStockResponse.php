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

/** @extends BaseResponse<array<array{SKU: ?string, OldStock: ?float, CurrentStock: ?float, UnfulfilledAmount: ?float, Message: string}>> */
class UpdateStockResponse extends BaseResponse
{
    /**
     * @var array<array{SKU: ?string, OldStock: ?float, CurrentStock: ?float, UnfulfilledAmount: ?float, Message: string}>
     *
     * @deprecated Use getter/setter instead. Will be protected in the next major version.
     */
    #[Serializer\Type("array")]
    #[Serializer\SerializedName("Data")]
    public $data = [];
}
