<?php
/* @var $user \app\models\User */
/* @var $body string */
/* @var $footer string */
/* @var $footerDatetime string|null */
/* @var $bodyDatetime string */
/* @var $iconClass string */
?>

<?= $this->render('item_parts/header_icon', ['iconClass' => $iconClass ?? null]) ?>

<div class="bg-success">
    <?= $this->render('item_parts/body', ['content' => $body ?? null]) ?>
    <?= $this->render('item_parts/body_datetime', ['datetime' => $bodyDatetime ?? null]) ?>
</div>

<?= $this->render('item_parts/username', ['user' => $user ?? null]) ?>
<?= $this->render('item_parts/content', ['content' => $content ?? null]) ?>

<?php if (isset($footer) || isset($footerDatetime)): ?>
    <div class="bg-warning">
        <?= $this->render('item_parts/footer', ['content' => $footer ?? null]) ?>
        <?= $this->render('item_parts/footer_datetime', ['datetime' => $footerDatetime ?? null]) ?>
    </div>
<?php endif; ?>
