<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
?>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- <link rel="icon" type="image/png" href="<?= Url::to('@web/favicon.png'); ?>"> -->
    <?php $this->head() ?>
</head>