<?php
if (!$datetime) {
    return;
}
?>
<span><?= \app\widgets\DateTime\DateTime::widget(['dateTime' => $datetime]) ?></span>
