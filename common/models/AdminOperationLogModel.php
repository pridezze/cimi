<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "admin_operation_log".
 *
 * @property int $id 主键 自增ID
 * @property int $addtime 操作时间
 * @property string $loginip 操作ip
 * @property int $admin_id 操作管理员id
 * @property string $operationurl 操作url
 * @property string $note 操作备注
 */
class AdminOperationLogModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_operation_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['addtime', 'admin_id'], 'required'],
            [['addtime', 'admin_id'], 'integer'],
            [['loginip'], 'string', 'max' => 150],
            [['operationurl', 'note'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'addtime' => Yii::t('app', 'Addtime'),
            'loginip' => Yii::t('app', 'Loginip'),
            'admin_id' => Yii::t('app', 'Admin ID'),
            'operationurl' => Yii::t('app', 'Operationurl'),
            'note' => Yii::t('app', 'Note'),
        ];
    }
}
