<?php

namespace app\widgets\HistoryListItem;

class HistoryItemFax extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_fax', ['model' => $this->model]);
    }
}
