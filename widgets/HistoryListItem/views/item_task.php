<?php
use app\widgets\HistoryList\helpers\HistoryListHelper;
?>

<?= $this->render('_item_common', [
    'user' => $model->user,
    'body' => HistoryListHelper::getBodyByModel($model),
    'iconClass' => 'fa fa-check-square bg-yellow',
    'footerDatetime' => $model->ins_ts,
    'footer' => isset($model->task->customerCreditor->name) ? "Creditor: " . $model->task->customerCreditor->name : '',
]) ?>
