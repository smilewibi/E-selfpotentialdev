<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DikotomiSn;

/**
 * DikotomiSnSearch represents the model behind the search form of `backend\models\DikotomiSn`.
 */
class DikotomiSnSearch extends DikotomiSn
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sn', 'id_tes', 'tot_jwb_a', 'tot_jwb_b', 'id_user', 'id_kategori'], 'integer'],
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
        $query = DikotomiSn::find();

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
            'id_sn' => $this->id_sn,
            'id_tes' => $this->id_tes,
            'tot_jwb_a' => $this->tot_jwb_a,
            'tot_jwb_b' => $this->tot_jwb_b,
            'id_user' => $this->id_user,
            'id_kategori' => $this->id_kategori,
        ]);

        return $dataProvider;
    }
}
