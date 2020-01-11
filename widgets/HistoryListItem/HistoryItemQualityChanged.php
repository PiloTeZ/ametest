<?php

namespace app\widgets\HistoryListItem;

class HistoryItemQualityChanged extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_quality_changed', ['model' => $this->model]);
    }
}
