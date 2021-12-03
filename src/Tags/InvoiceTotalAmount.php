<?php

namespace Qr\INVOICE\Tags;

use Qr\INVOICE\Tag;

class InvoiceTotalAmount extends Tag
{
    public function __construct($value)
    {
        parent::__construct(4, $value);
    }
}
