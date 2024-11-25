<?php
declare(strict_types=1);

namespace app\controllers\actions;

use app\services\DTO\builders\OxrLatestDtoBuilder;
use app\services\OxrRatesService;
use GuzzleHttp\Exception\GuzzleException;
use yii\base\Action;

final class GetLatestAction extends Action
{
    /**
     * @return void
     * @throws GuzzleException
     */
    public function run(): void
    {
        (new OxrLatestDtoBuilder((new OxrRatesService())
            ->getLatest()))
            ->build();
    }
}
