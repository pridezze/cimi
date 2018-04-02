<?php

namespace backend\controllers;

use Yii;
use common\models\AdminOperationLogSreach;
use common\models\AdminLoginLogSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\base\BaseController;
/*
 *系统管理日志 控制器
 */
class LogsController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * 管理员登录 注销日志列表
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AdminLoginLogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }


    //管理员操作日志展示
    public function actionOperation()
    {
        $searchModel = new AdminOperationLogSreach();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('operation', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
