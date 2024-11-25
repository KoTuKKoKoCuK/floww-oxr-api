<?php

namespace app\controllers;

use app\controllers\actions\GetLatestAction;
use yii\filters\VerbFilter;
use yii\base\Controller;

class RatesController extends Controller
{
    public const string GET_LATEST = 'get-latest';

    /**
     * {@inheritdoc}
     */
    public function behaviors(): array
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    self::GET_LATEST => ['get'],
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
        ];
    }
}
