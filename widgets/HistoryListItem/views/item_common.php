<?php
/* @var $user \app\models\User */
/* @var $body string */
/* @var $footer string */
/* @var $footerDatetime string|null */
/* @var $bodyDatetime string */
/* @var $iconClass string */
?>

<?= $this->render('parts/header_icon', ['iconClass' => $iconClass ?? null]) ?>

<div class="bg-success">
    <?= $this->render('parts/body', ['content' => $body ?? null]) ?>
    <?= $this->render('parts/body_datetime', ['datetime' => $bodyDatetime ?? null]) ?>
</div>

<?= $this->render('parts/username', ['user' => $user ?? null]) ?>
<?= $this->render('parts/content', ['content' => $content ?? null]) ?>

<?php if (isset($footer) || isset($footerDatetime)): ?>
    <div class="bg-warning">
        <?= $this->render('parts/footer', ['content' => $footer ?? null]) ?>
        <?= $this->render('parts/footer_datetime', ['datetime' => $footerDatetime ?? null]) ?>
    </div>
<?php endif; ?>
