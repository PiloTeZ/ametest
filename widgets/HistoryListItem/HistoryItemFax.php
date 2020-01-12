<?php

namespace app\widgets\HistoryListItem;

use app\widgets\HistoryList\helpers\HistoryListHelper;
use Yii;
use yii\helpers\Html;

class HistoryItemFax extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_common', [
            'user' => $this->model->user,
            'body' => HistoryListHelper::getBodyByModel($this->model) .
                ' - ' .
                (isset($this->model->fax->document) ? Html::a(
                    Yii::t('app', 'view document'),
                    $this->model->fax->document->getViewUrl(),
                    [
                        'target' => '_blank',
                        'data-pjax' => 0,
                    ]
                ) : ''),
            'footer' => Yii::t('app', '{type} was sent to {group}', [
                'type' => $this->model->fax ? $this->model->fax->getTypeText() : 'Fax',
                'group' => isset($this->model->fax->creditorGroup) ? Html::a($this->model->fax->creditorGroup->name, ['creditors/groups'], ['data-pjax' => 0]) : '',
            ]),
            'footerDatetime' => $this->model->ins_ts,
            'iconClass' => 'fa-fax bg-green',
        ]);
    }
}
