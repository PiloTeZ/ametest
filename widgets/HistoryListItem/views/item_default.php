<?php
use app\widgets\HistoryList\helpers\HistoryListHelper;
?>

<?= $this->render('_item_common', [
    'user' => $this->model->user,
    'body' => HistoryListHelper::getBodyByModel($this->model),
    'bodyDatetime' => $this->model->ins_ts,
    'iconClass' => 'fa-gear bg-purple-light',
]) ?>
