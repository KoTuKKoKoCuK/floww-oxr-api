<?php

declare(strict_types=1);

namespace app\components;

use Yii;
use yii\base\Exception;
use yii\web\ErrorHandler;
use yii\web\Response;

final class JsonErrorHandler extends ErrorHandler
{
    protected function renderException($exception): void
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        Yii::$app->response->data = [
            'name' => ($exception instanceof Exception) ? $exception->getName() : 'Error',
            'message' => $exception->getMessage(),
            'code' => $exception->getCode(),
            'status' => $exception->statusCode ?? 500,
        ];

        Yii::$app->response->send();
    }
}
