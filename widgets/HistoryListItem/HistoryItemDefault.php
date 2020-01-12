<?php

namespace app\widgets\HistoryListItem;

use app\widgets\HistoryList\helpers\HistoryListHelper;

class HistoryItemDefault extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_common', [
            'user' => $this->model->user,
            'body' => HistoryListHelper::getBodyByModel($this->model),
            'bodyDatetime' => $this->model->ins_ts,
            'iconClass' => 'fa-gear bg-purple-light',
        ]);
    }
}
