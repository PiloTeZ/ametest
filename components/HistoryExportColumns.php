<?php

namespace app\components;

use app\components\historyExportColumns\AbstractHistoryExportColumns;
use app\components\historyExportColumns\HistoryExportColumnsDefault;
use app\components\historyExportColumns\HistoryExportColumnsSms;
use app\components\historyExportColumns\HistoryExportColumnsTask;
use app\models\History;

class HistoryExportColumns extends \yii\base\BaseObject
{
    public static $mapEventToHandler = [
        // Пример
//        History::EVENT_CREATED_TASK => HistoryExportColumnsTask::class,
//        History::EVENT_UPDATED_TASK => HistoryExportColumnsTask::class,
//        History::EVENT_INCOMING_SMS => HistoryExportColumnsSms::class,
//        History::EVENT_OUTGOING_SMS => HistoryExportColumnsSms::class,
    ];

    /**
     * @param History $model
     * @return string|AbstractHistoryExportColumns
     */
    public static function columns(History $model): string
    {
        return static::$mapEventToHandler[$model->event] ?? HistoryExportColumnsDefault::class;
    }
}
