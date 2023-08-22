<?php

namespace Tpay\OpenApi\Model\Fields\Address;

use Tpay\OpenApi\Model\Fields\Field;

class Phone extends Field
{
    protected $name = __CLASS__;
    protected $type = self::STRING;
    protected $maxLength = 30;
}