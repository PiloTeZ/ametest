<?php

namespace app\widgets\HistoryListItem;

use app\models\Customer;

class HistoryItemChangeQuality extends AbstractHistoryItem
{
    public function run()
    {
        return $this->render('item_status_change', [
            'model' => $this->model,
            'oldValue' => Customer::getTypeTextByType($this->model->getDetailOldValue('quality')),
            'newValue' => Customer::getTypeTextByType($this->model->getDetailNewValue('quality')),
        ]);
    }
}
