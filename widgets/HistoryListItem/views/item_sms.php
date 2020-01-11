<?php

use app\models\Sms;
use app\widgets\HistoryList\helpers\HistoryListHelper;
?>

<?= $this->render('_item_common', [
    'user' => $model->user,
    'body' => HistoryListHelper::getBodyByModel($model),
    'footer' => $model->sms->direction == Sms::DIRECTION_INCOMING ?
        Yii::t('app', 'Incoming message from {number}', [
            'number' => $model->sms->phone_from ?? ''
        ]) : Yii::t('app', 'Sent message to {number}', [
            'number' => $model->sms->phone_to ?? ''
        ]),
    'iconIncome' => $model->sms->direction == Sms::DIRECTION_INCOMING,
    'footerDatetime' => $model->ins_ts,
    'iconClass' => 'icon-sms bg-dark-blue'
]) ?>