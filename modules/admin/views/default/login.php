<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\modules\admin\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;

$this->context->layout = '@app/modules/admin/views/layouts/blank';
?>
<div class="admin-default-login">
    <?php $form = ActiveForm::begin(['validateOnBlur' => false]); ?>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">
                        Вход в админку
                    </h1>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <?= Html::activeCheckbox($model, 'rememberMe', ['label' => 'Запомнить']); ?>
                        </div>
                        <div class="col-md-6">
                            <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>

