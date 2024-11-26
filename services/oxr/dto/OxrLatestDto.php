<?php

declare(strict_types=1);

namespace app\services\oxr\dto;

final readonly class OxrLatestDto
{
    public function __construct(
        public string $disclaimer,
        public string $license,
        public int $timestamp,
        public string $base,
        public array $rates
    ) {
    }
}
