<?php
if (empty($footerDatetime)) {
    return;
}
?>
<span><?= \app\widgets\DateTime\DateTime::widget(['dateTime' => $footerDatetime]) ?></span>
