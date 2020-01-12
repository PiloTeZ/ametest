<?php

namespace app\components;

use app\components\historyExportColumns\HistoryExportColumnsDefault;
use app\components\historyExportColumns\HistoryExportColumnsInterface;
use app\models\History;

/**
 * Подбирает класс для генерации данных экспорта в зависимости от типа события
 */
class HistoryExportColumns extends \yii\base\BaseObject
{
    public static $mapEventToHandler = [
        // Пример. Ничего не используется, так как на данный момент не нужно
//        History::EVENT_CREATED_TASK => HistoryExportColumnsTask::class,
//        History::EVENT_UPDATED_TASK => HistoryExportColumnsTask::class,
//        History::EVENT_INCOMING_SMS => HistoryExportColumnsSms::class,
//        History::EVENT_OUTGOING_SMS => HistoryExportColumnsSms::class,
    ];

    /**
     * @param History $model
     * @return string|HistoryExportColumnsInterface
     */
    public static function columns(History $model): string
    {
        return static::$mapEventToHandler[$model->event] ?? HistoryExportColumnsDefault::class;
    }
}
