<?php

namespace Qr\INVOICE\Tags;

use Qr\INVOICE\Tag;

class InvoiceTaxAmount extends Tag
{
    public function __construct($value)
    {
        parent::__construct(5, $value);
    }
}
