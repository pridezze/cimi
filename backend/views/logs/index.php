<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AdminLoginLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '登录日志';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-login-log-model-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['label'=>'操作时间','value'=>'addtime','format'=>['date', 'php:Y-m-d H:i']],
            'loginip',
            ['label'=>'操作管理员','value'=>'admin.nickname'],
            'note',
        ],
    ]); ?>
</div>
