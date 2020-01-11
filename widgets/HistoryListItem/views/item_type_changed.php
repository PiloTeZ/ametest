<?php
use app\models\Customer;
?>

<?= $this->render('_item_status_changed', [
    'model' => $model,
    'oldValue' => Customer::getTypeTextByType($model->getDetailOldValue('type')),
    'newValue' => Customer::getTypeTextByType($model->getDetailNewValue('type'))
]) ?>
