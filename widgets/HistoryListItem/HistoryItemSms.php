<?php

namespace app\widgets\HistoryListItem;

use app\models\Sms;
use app\widgets\HistoryList\helpers\HistoryListHelper;
use Yii;

class HistoryItemSms extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_common', [
            'user' => $this->model->user,
            'body' => HistoryListHelper::getBodyByModel($this->model),
            'footer' => $this->model->sms->direction == Sms::DIRECTION_INCOMING ?
                Yii::t('app', 'Incoming message from {number}', [
                    'number' => $this->model->sms->phone_from ?? ''
                ]) : Yii::t('app', 'Sent message to {number}', [
                    'number' => $this->model->sms->phone_to ?? ''
                ]),
            'iconIncome' => $this->model->sms->direction == Sms::DIRECTION_INCOMING,
            'footerDatetime' => $this->model->ins_ts,
            'iconClass' => 'icon-sms bg-dark-blue'
        ]);
    }
}
