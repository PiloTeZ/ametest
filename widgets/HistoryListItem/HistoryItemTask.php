<?php

namespace app\widgets\HistoryListItem;

use app\widgets\HistoryList\helpers\HistoryListHelper;

class HistoryItemTask extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_common', [
            'user' => $this->model->user,
            'body' => HistoryListHelper::getBodyByModel($this->model),
            'iconClass' => 'fa fa-check-square bg-yellow',
            'footerDatetime' => $this->model->ins_ts,
            'footer' => isset($this->model->task->customerCreditor->name) ? "Creditor: " . $this->model->task->customerCreditor->name : ''
        ]);
    }
}
