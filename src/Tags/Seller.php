<?php

namespace Qr\INVOICE\Tags;

use Qr\INVOICE\Tag;

class Seller extends Tag
{
    public function __construct($value)
    {
        parent::__construct(1, $value);
    }
}
