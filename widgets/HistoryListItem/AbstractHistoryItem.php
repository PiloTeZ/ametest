<?php

namespace app\widgets\HistoryListItem;

use app\models\History;
use yii\base\InvalidArgumentException;
use yii\base\Widget;

abstract class AbstractHistoryItem extends Widget
{
    /** @var History */
    protected $model;

    public function init()
    {
        if (!$this->template) {
            throw new InvalidArgumentException('Параметр template обязателен');
        }

        if (!$this->model) {
            throw new InvalidArgumentException('Параметр model обязателен');
        }

        parent::init();
    }
}
