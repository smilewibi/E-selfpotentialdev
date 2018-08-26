<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kepribadian;

/**
 * KepribadianSearch represents the model behind the search form of `backend\models\Kepribadian`.
 */
class KepribadianSearch extends Kepribadian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kepribadian', 'id_type', 'id_bid_karir', 'id_user'], 'integer'],
            [['nama_type', 'sinopsis', 'kelebihan', 'kekurangan', 'motivasi'], 'safe'],
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
        $query = Kepribadian::find();

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
            'id_kepribadian' => $this->id_kepribadian,
            'id_type' => $this->id_type,
            'id_bid_karir' => $this->id_bid_karir,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'nama_type', $this->nama_type])
            ->andFilterWhere(['like', 'sinopsis', $this->sinopsis])
            ->andFilterWhere(['like', 'kelebihan', $this->kelebihan])
            ->andFilterWhere(['like', 'kekurangan', $this->kekurangan])
            ->andFilterWhere(['like', 'motivasi', $this->motivasi]);

        return $dataProvider;
    }
}
