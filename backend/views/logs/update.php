<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AdminLoginLogModel */

$this->title = 'Update Admin Login Log Model: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Admin Login Log Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admin-login-log-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
