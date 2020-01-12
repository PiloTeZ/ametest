<?php

namespace app\widgets\HistoryListItem\helpers;

use app\models\History;
use app\widgets\HistoryListItem\AbstractHistoryItem;
use app\widgets\HistoryListItem\HistoryItemCall;
use app\widgets\HistoryListItem\HistoryItemChangeQuality;
use app\widgets\HistoryListItem\HistoryItemChangeType;
use app\widgets\HistoryListItem\HistoryItemDefault;
use app\widgets\HistoryListItem\HistoryItemFax;
use app\widgets\HistoryListItem\HistoryItemSms;
use app\widgets\HistoryListItem\HistoryItemTask;
use yii\base\BaseObject;
use yii\helpers\ArrayHelper;

/**
 * Определяет виджет отвественный за отображения события
 */
class HistoryItemHelper extends BaseObject
{
    /**
     * @var array Маппинг. Событие => виджет для отображения элемента списка
     */
    public static $mapEventToWidget = [
        History::EVENT_CREATED_TASK => HistoryItemTask::class,
        History::EVENT_UPDATED_TASK => HistoryItemTask::class,
        History::EVENT_COMPLETED_TASK => HistoryItemTask::class,

        History::EVENT_INCOMING_SMS => HistoryItemSms::class,
        History::EVENT_OUTGOING_SMS => HistoryItemSms::class,

        History::EVENT_INCOMING_CALL => HistoryItemCall::class,
        History::EVENT_OUTGOING_CALL => HistoryItemCall::class,

        History::EVENT_INCOMING_FAX => HistoryItemFax::class,
        History::EVENT_OUTGOING_FAX => HistoryItemFax::class,

        History::EVENT_CUSTOMER_CHANGE_TYPE => HistoryItemChangeType::class,
        History::EVENT_CUSTOMER_CHANGE_QUALITY => HistoryItemChangeQuality::class,
    ];

    /**
     * Виджет для отображения элемента списка в зависимости от типа события
     * @param History $model
     * @return string|AbstractHistoryItem
     */
    public static function getWidgetClass(History $model): string
    {
        return ArrayHelper::getValue(static::$mapEventToWidget, $model->event, HistoryItemDefault::class);
    }

    /**
     * Рендер виджета элемента списка
     * @param History $model
     * @return string
     * @throws \Exception
     */
    public static function render(History $model): string
    {
        return (static::getWidgetClass($model))::widget(['model' => $model]);
    }
}
