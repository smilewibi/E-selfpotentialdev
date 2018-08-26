<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kesan;

/**
 * KesanSearch represents the model behind the search form of `backend\models\Kesan`.
 */
class KesanSearch extends Kesan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kesan', 'id_user'], 'integer'],
            [['tgl_jam', 'judul', 'kesan'], 'safe'],
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
        $query = Kesan::find();

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
            'id_kesan' => $this->id_kesan,
            'tgl_jam' => $this->tgl_jam,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'kesan', $this->kesan]);

        return $dataProvider;
    }
}
