<?php

namespace app\widgets\HistoryListItem;

class HistoryItemTask extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_task', ['model' => $this->model]);
    }
}
