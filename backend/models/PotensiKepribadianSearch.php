<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PotensiKepribadian;

/**
 * PotensiKepribadianSearch represents the model behind the search form of `backend\models\PotensiKepribadian`.
 */
class PotensiKepribadianSearch extends PotensiKepribadian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_potensi', 'id_kepribadian', 'id_tes_tpa', 'id_user'], 'integer'],
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
        $query = PotensiKepribadian::find();

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
            'id_potensi' => $this->id_potensi,
            'id_kepribadian' => $this->id_kepribadian,
            'id_tes_tpa' => $this->id_tes_tpa,
            'id_user' => $this->id_user,
        ]);

        return $dataProvider;
    }
}
