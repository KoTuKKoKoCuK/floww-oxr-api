<?php

declare(strict_types=1);

namespace app\exceptions;

use Throwable;
use yii\web\HttpException;

class OxrServiceException extends HttpException
{
    public function __construct(
        string $message = 'Open Exchange Rates Service Error',
        int $code = 500,
        Throwable $previous = null
    ) {
        parent::__construct(500, $message, $code, $previous);
    }
}
