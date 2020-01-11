<?php
use app\models\Customer;
?>

<?= $this->render('_item_status_change', [
    'model' => $model,
    'oldValue' => Customer::getTypeTextByType($model->getDetailOldValue('type')),
    'newValue' => Customer::getTypeTextByType($model->getDetailNewValue('type'))
]) ?>
