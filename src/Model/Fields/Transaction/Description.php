<?php

namespace Tpay\OpenApi\Model\Fields\Transaction;

use Tpay\OpenApi\Model\Fields\Field;

class Description extends Field
{
    protected $name = __CLASS__;
    protected $type = self::STRING;
    protected $maxLength = 128;
}