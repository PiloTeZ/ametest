<?php
if (!$footerDatetime) {
    return;
}
?>
<span><?= \app\widgets\DateTime\DateTime::widget(['dateTime' => $footerDatetime]) ?></span>
