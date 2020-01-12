<?php
/* @var $model \app\models\History */
/* @var $oldValue string */
/* @var $newValue string */
/* @var $content string */
?>

<div class="bg-success ">
    <?php echo "$model->eventText " .
        "<span class='badge badge-pill badge-warning'>" . ($oldValue ?? "<i>not set</i>") . "</span>" .
        " &#8594; " .
        "<span class='badge badge-pill badge-success'>" . ($newValue ?? "<i>not set</i>") . "</span>";
    ?>

    <?= $this->render('parts/body_datetime', ['datetime' => $model->ins_ts]) ?>
</div>

<?= $this->render('parts/username', ['user' => $model->user]) ?>
<?= $this->render('parts/content', ['content' => $content ?? null]) ?>
