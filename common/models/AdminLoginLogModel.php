<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "admin_login_log".
 *
 * @property int $id 主键 自增ID
 * @property int $addtime 添加时间
 * @property string $loginip 登录ip
 * @property int $admin_id 管理员id
 * @property string $note 操作备注
 */
class AdminLoginLogModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_login_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['addtime', 'loginip', 'admin_id'], 'required'],
            [['addtime', 'admin_id'], 'integer'],
            [['loginip', 'note'], 'string', 'max' => 255],
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
            'note' => Yii::t('app', 'Note'),
        ];
    }
}
