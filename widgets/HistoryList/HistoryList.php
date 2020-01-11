<?php

namespace app\widgets\HistoryList;

use app\models\History;
use app\models\search\HistorySearch;
use app\widgets\Export\Export;
use app\widgets\HistoryListItem\AbstractHistoryItem;
use app\widgets\HistoryListItem\HistoryItemCall;
use app\widgets\HistoryListItem\HistoryItemDefault;
use app\widgets\HistoryListItem\HistoryItemFax;
use app\widgets\HistoryListItem\HistoryItemChangeQuality;
use app\widgets\HistoryListItem\HistoryItemSms;
use app\widgets\HistoryListItem\HistoryItemTask;
use app\widgets\HistoryListItem\HistoryItemChangeType;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use Yii;

class HistoryList extends Widget
{
    /**
     * @var array Маппинг событие => виджет для отображения элемента списка
     */
    public $mapEventToWidget = [
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

    public function run()
    {
        $model = new HistorySearch();

        return $this->render('main', [
            'model' => $model,
            'linkExport' => $this->getLinkExport(),
            'dataProvider' => $model->search(\Yii::$app->request->queryParams),
        ]);
    }

    /**
     * @param History $model
     * @return string|AbstractHistoryItem
     */
    public function getItemWidget(History $model): string
    {
        return ArrayHelper::getValue($this->mapEventToWidget, $model->event, HistoryItemDefault::class);
    }

    /**
     * @param History $model
     * @return string
     * @throws \Exception
     */
    public function renderItemWidget(History $model): string
    {
        return ($this->getItemWidget($model))::widget(['model' => $model]);
    }

    /**
     * @return string
     */
    private function getLinkExport()
    {
        $params = \Yii::$app->getRequest()->getQueryParams();
        $params = ArrayHelper::merge([
            'exportType' => Export::FORMAT_CSV,
        ], $params);
        $params[0] = 'site/export';

        return Url::to($params);
    }
}
