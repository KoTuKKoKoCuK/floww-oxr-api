<?php

declare(strict_types=1);

namespace app\controllers\actions;

use app\services\oxr\dto\OxrLatestDto;
use app\services\oxr\dto\OxrLatestDtoBuilder;
use app\services\oxr\OxrService;
use GuzzleHttp\Exception\GuzzleException;
use yii\base\Action;

final class GetLatestAction extends Action
{

    public function run(): OxrLatestDto
    {
        return (new OxrLatestDtoBuilder(
            (new OxrService())
                ->getLatest()
        ))
            ->build();
    }
}
