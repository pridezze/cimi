<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AdminOperationLogModel;

/**
 * AdminOperationLogSreach represents the model behind the search form of `common\models\AdminOperationLogModel`.
 */
class AdminOperationLogSreach extends AdminOperationLogModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'addtime', 'admin_id'], 'integer'],
            [['loginip', 'operationurl', 'note'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AdminOperationLogModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 15,], //查询条数 每页
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'addtime' => $this->addtime,
            'admin_id' => $this->admin_id,
        ]);

        $query->andFilterWhere(['like', 'loginip', $this->loginip])
            ->andFilterWhere(['like', 'operationurl', $this->operationurl])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
