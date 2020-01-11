<?php

namespace app\widgets\HistoryListItem;

use app\widgets\HistoryListItem\helpers\HistoryListHelper;

class HistoryItemDefault extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_default', ['model' => $this->model]);
    }
}
