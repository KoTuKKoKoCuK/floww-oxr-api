<?php

namespace app\services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Yii;

/**
 * @link https://docs.openexchangerates.org/reference/api-introduction
 */
final readonly class OxrRatesService
{
    public const string API_PATH = 'https://openexchangerates.org/api/';

    /**
     * @throws GuzzleException
     * @link https://docs.openexchangerates.org/reference/latest-json
     */
    public function getLatest(): string
    {
        $client = new Client();

        $response = $client->request('GET', self::API_PATH . 'latest.json', [
            'headers' => $this->headers(),
        ]);

        return $response->getBody()->getContents();
    }

    /**
     * @return string[]
     */
    private function headers(): array
    {
        return [
            'accept' => 'application/json',
            "Authorization" => 'Token ' . Yii::$app->params['apiTokenOxr'],
        ];
    }
}
