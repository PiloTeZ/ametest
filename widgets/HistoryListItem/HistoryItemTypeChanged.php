<?php

namespace app\widgets\HistoryListItem;

class HistoryItemTypeChanged extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_type_changed', ['model' => $this->model]);
    }
}
