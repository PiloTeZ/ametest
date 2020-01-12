<?php

namespace app\widgets\HistoryListItem;

use app\models\Call;
use app\widgets\HistoryList\helpers\HistoryListHelper;

class HistoryItemCall extends AbstractHistoryItem
{
    public function run()
    {
        $answered = $this->model->call && $this->model->call->status == Call::STATUS_ANSWERED;
        return $this->render('item_common', [
            'user' => $this->model->user,
            'content' => $this->model->call->comment ?? '',
            'body' => HistoryListHelper::getBodyByModel($this->model),
            'footerDatetime' => $this->model->ins_ts,
            'footer' => isset($this->model->call->applicant) ? "Called <span>{$this->model->call->applicant->name}</span>" : null,
            'iconClass' => $answered ? 'md-phone bg-green' : 'md-phone-missed bg-red',
            'iconIncome' => $answered && $this->model->call->direction == Call::DIRECTION_INCOMING,
        ]);
    }
}
