<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TesTpa;

/**
 * TesTpaSearch represents the model behind the search form of `backend\models\TesTpa`.
 */
class TesTpaSearch extends TesTpa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tpa', 'id_karir'], 'integer'],
            [['soal', 'jwb_a', 'jwb_b', 'jwb_c', 'jwb_d', 'jwb_e', 'jwb_bnr'], 'safe'],
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
        $query = TesTpa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_tpa' => $this->id_tpa,
            'id_karir' => $this->id_karir,
        ]);

        $query->andFilterWhere(['like', 'soal', $this->soal])
            ->andFilterWhere(['like', 'jwb_a', $this->jwb_a])
            ->andFilterWhere(['like', 'jwb_b', $this->jwb_b])
            ->andFilterWhere(['like', 'jwb_c', $this->jwb_c])
            ->andFilterWhere(['like', 'jwb_d', $this->jwb_d])
            ->andFilterWhere(['like', 'jwb_e', $this->jwb_e])
            ->andFilterWhere(['like', 'jwb_bnr', $this->jwb_bnr]);

        return $dataProvider;
    }
}
