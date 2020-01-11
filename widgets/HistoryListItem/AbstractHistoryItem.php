<?php

namespace app\widgets\HistoryListItem;

use app\models\History;
use yii\base\InvalidArgumentException;
use yii\base\Widget;

abstract class AbstractHistoryItem extends Widget
{
    /** @var History */
    public $model;

    public function init()
    {
        if (!$this->model) {
            throw new InvalidArgumentException('Параметр model обязателен');
        }

        parent::init();
    }
}
