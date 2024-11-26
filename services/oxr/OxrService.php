<?php

declare(strict_types=1);

namespace app\services\oxr;

use app\exceptions\OxrServiceException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * @link https://docs.openexchangerates.org/reference/api-introduction
 */
final readonly class OxrService
{
    public const string API_PATH = 'https://openexchangerates.org/api/';

    /**
     * @throws OxrServiceException
     * @link https://docs.openexchangerates.org/reference/latest-json
     */
    public function getLatest(): string
    {
        try {
            $client = new Client();
            $response = $client->request('GET', self::API_PATH . 'latest.json', [
                'headers' => $this->headers(),
            ]);

            $response->getBody()->getContents();
        } catch (GuzzleException $exception) {
            throw new OxrServiceException(
                'Failed to fetch latest exchange rates',
                previous: $exception
            );
        }

        return $response->getBody()->getContents();
    }

    /**
     * @return string[]
     */
    private function headers(): array
    {
        return [
            'accept' => 'application/json',
            "Authorization" => 'Token ' . env('API_TOKEN_OXR'),
        ];
    }
}
