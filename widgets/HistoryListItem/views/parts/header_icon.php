<?php
use yii\helpers\Html;

if (empty($iconClass)) {
    return;
}
?>
<?= Html::tag('i', '', ['class' => "icon icon-circle icon-main white $iconClass"]); ?>
