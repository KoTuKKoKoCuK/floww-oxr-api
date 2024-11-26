<?php

declare(strict_types=1);

namespace app\services\oxr\dto;

final readonly class OxrRatesDto
{
    public function __construct(
        public string $currency,
        public float $value
    ) {
    }
}
