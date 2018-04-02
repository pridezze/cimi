<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AdminLoginLogModel */

$this->title = 'Create Admin Login Log Model';
$this->params['breadcrumbs'][] = ['label' => 'Admin Login Log Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-login-log-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
