<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AdminLoginLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Login Log Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-login-log-model-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'addtime:datetime',
            'loginip',
            'admin.nickname',
            'note',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
