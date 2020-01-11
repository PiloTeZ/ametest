<?php

namespace app\widgets\HistoryListItem;

class HistoryItemChangeType extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_change_type', ['model' => $this->model]);
    }
}
