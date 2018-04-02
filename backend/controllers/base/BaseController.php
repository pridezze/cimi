<?php

namespace backend\controllers\base;

use Yii;
use yii\web\Controller;
use common\models\AdminOperationLogModel;

class BaseController extends Controller
{
    public function beforeAction($action) {
        if (!parent::beforeAction($action)) {
            return false;
        } else {
            return true;
        }
    }

    //获取当前操作url
    public function init($note = 'url操作'){
        $model = new AdminOperationLogModel();
        $model->addtime=time();
        $model->loginip=Yii::$app->request->userIP;
        $model->admin_id=Yii::$app->user->identity->id;
        $model->operationurl=Yii::$app->request->url;
        $model->note=$note;
        $model->save();
    }
}
