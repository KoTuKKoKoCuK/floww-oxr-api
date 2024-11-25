<?php

namespace app\services\DTO;

final readonly class OxrRatesDto
{
    public function __construct(
        public string   $currency,
        public float    $value
    )
    {
    }
}
