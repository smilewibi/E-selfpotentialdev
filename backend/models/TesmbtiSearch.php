<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tesmbti;

/**
 * TesmbtiSearch represents the model behind the search form of `backend\models\Tesmbti`.
 */
class TesmbtiSearch extends Tesmbti
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tes', 'id_kategori'], 'integer'],
            [['Soal', 'Jwb_a', 'Jwb_b'], 'safe'],
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
        $query = Tesmbti::find();

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
            'id_tes' => $this->id_tes,
            'id_kategori' => $this->id_kategori,
        ]);

        $query->andFilterWhere(['like', 'Soal', $this->Soal])
            ->andFilterWhere(['like', 'Jwb_a', $this->Jwb_a])
            ->andFilterWhere(['like', 'Jwb_b', $this->Jwb_b]);

        return $dataProvider;
    }
}
