<?php

namespace Qr\INVOICE\Tags;

use Qr\INVOICE\Tag;

class TaxNumber extends Tag
{
    public function __construct($value)
    {
        parent::__construct(2, $value);
    }
}
