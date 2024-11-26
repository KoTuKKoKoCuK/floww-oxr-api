<?php

declare(strict_types=1);

namespace app\controllers;

use app\controllers\actions\GetLatestAction;
use yii\base\Controller;
use yii\filters\ContentNegotiator;
use yii\filters\VerbFilter;
use yii\web\Response;

final class OpenExchangeRatesController extends Controller
{
    public const string GET_LATEST = 'get-latest';
    // Add more constants here

    /**
     * {@inheritdoc}
     */
    public function behaviors(): array
    {
        return [
            'content' => [
                'class' => ContentNegotiator::class,
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    self::GET_LATEST => ['get'],
                    // Add more actions here
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions(): array
    {
        return [
            self::GET_LATEST => GetLatestAction::class,
            // Add more actions here
        ];
    }
}
