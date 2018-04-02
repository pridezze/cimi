<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdminLoginLogModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-login-log-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'addtime')->textInput() ?>

    <?= $form->field($model, 'loginip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_id')->textInput() ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
