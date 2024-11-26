<?php

declare(strict_types=1);

namespace app\controllers\actions;

use app\exceptions\OxrServiceException;
use app\services\oxr\dto\OxrLatestDto;
use app\services\oxr\dto\OxrLatestDtoBuilder;
use app\services\oxr\OxrService;
use yii\base\Action;

final class GetLatestAction extends Action
{
    /**
     * @throws OxrServiceException
     */
    public function run(): OxrLatestDto
    {
        return (new OxrLatestDtoBuilder(
            (new OxrService())
                ->getLatest()
        ))
            ->build();
    }
}
