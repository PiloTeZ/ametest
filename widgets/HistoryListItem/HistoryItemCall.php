<?php

namespace app\widgets\HistoryListItem;

class HistoryItemCall extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_call', ['model' => $this->model]);
    }
}
