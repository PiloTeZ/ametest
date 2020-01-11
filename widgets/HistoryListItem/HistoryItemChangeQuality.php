<?php

namespace app\widgets\HistoryListItem;

class HistoryItemChangeQuality extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_change_quality', ['model' => $this->model]);
    }
}
