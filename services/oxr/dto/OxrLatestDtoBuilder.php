<?php

declare(strict_types=1);

namespace app\services\oxr\dto;

final readonly class OxrLatestDtoBuilder
{
    public function __construct(
        private string $data
    ) {
    }

    public function build(): OxrLatestDto
    {
        $rates = [];

        $data = json_decode($this->data, true);

        if (!empty($data['rates'])) {
            foreach ($data['rates'] as $currencyRate => $value) {
                $rates[$currencyRate] = new OxrRatesDto($currencyRate, $value);
            }
        }

        return new OxrLatestDto(
            $data['disclaimer'] ?? '',
            $data['license'] ?? '',
            $data['timestamp'] ?? 0,
            $data['base'],
            $rates,
        );
    }
}
