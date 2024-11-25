<?php

namespace app\services\DTO;

final readonly class OxrLatestDto
{
    public function __construct(
        public string $disclaimer,
        public string $license,
        public int    $timestamp,
        public string $base,
        public array  $rates
    )
    {
    }
}
