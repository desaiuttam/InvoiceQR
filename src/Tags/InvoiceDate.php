<?php

namespace Qr\INVOICE\Tags;

use Qr\INVOICE\Tag;

class InvoiceDate extends Tag
{
    public function __construct($value)
    {
        parent::__construct(3, $value);
    }
}
