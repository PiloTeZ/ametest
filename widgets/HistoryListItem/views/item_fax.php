<?php
use app\widgets\HistoryList\helpers\HistoryListHelper;
use yii\helpers\Html;

?>

<?= $this->render('_item_common', [
    'user' => $model->user,
    'body' => HistoryListHelper::getBodyByModel($model) .
        ' - ' .
        (isset($model->fax->document) ? Html::a(
            Yii::t('app', 'view document'),
            $model->fax->document->getViewUrl(),
            [
                'target' => '_blank',
                'data-pjax' => 0,
            ]
        ) : ''),
    'footer' => Yii::t('app', '{type} was sent to {group}', [
        'type' => $model->fax ? $model->fax->getTypeText() : 'Fax',
        'group' => isset($model->fax->creditorGroup) ? Html::a($model->fax->creditorGroup->name, ['creditors/groups'], ['data-pjax' => 0]) : '',
    ]),
    'footerDatetime' => $model->ins_ts,
    'iconClass' => 'fa-fax bg-green',
]) ?>
