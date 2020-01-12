<?php

namespace app\components\historyExportColumns;

use app\models\History;
use app\widgets\HistoryList\helpers\HistoryListHelper;
use Yii;

abstract class AbstractHistoryExportColumns extends \yii\base\BaseObject
{
    public static function date(History $model): string
    {
        return $model->ins_ts;
    }

    public static function user(History $model): string
    {
        return isset($model->user) ? $model->user->username : Yii::t('app', 'System');
    }

    public static function type(History $model): string
    {
        return $model->object;
    }

    public static function event(History $model): string
    {
        return $model->eventText;
    }

    public static function message(History $model): string
    {
        return strip_tags(HistoryListHelper::getBodyByModel($model));
    }
}
