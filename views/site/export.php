<?php

/**
 * @var $this yii\web\View
 * @var $model \app\models\History
 * @var $dataProvider yii\data\ActiveDataProvider
 * @var $exportType string
 */

use app\components\HistoryExportColumns;
use app\models\History;
use app\widgets\Export\Export;
?>

<?= Export::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'attribute' => 'ins_ts',
            'label' => Yii::t('app', 'Date'),
            'format' => 'datetime',
            'value' => function(History $model) {
                return HistoryExportColumns::columns($model)::date($model);
            }
        ],
        [
            'label' => Yii::t('app', 'User'),
            'value' => function(History $model) {
                return HistoryExportColumns::columns($model)::user($model);
            }
        ],
        [
            'label' => Yii::t('app', 'Type'),
            'value' => function (History $model) {
                return HistoryExportColumns::columns($model)::type($model);
            }
        ],
        [
            'label' => Yii::t('app', 'Event'),
            'value' => function (History $model) {
                return HistoryExportColumns::columns($model)::event($model);
            }
        ],
        [
            'label' => Yii::t('app', 'Message'),
            'value' => function (History $model) {
                return HistoryExportColumns::columns($model)::message($model);
            }
        ]
    ],
    'exportType' => $exportType,
    'batchSize' => 2000,
    'filename' => 'history-' . time()
]);
