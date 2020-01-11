<?php

namespace app\widgets\HistoryListItem;

class HistoryItemSms extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_sms', ['model' => $this->model]);
    }
}
