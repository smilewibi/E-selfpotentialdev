<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TypeKepribadian;

/**
 * TypeKepribadianSearch represents the model behind the search form of `backend\models\TypeKepribadian`.
 */
class TypeKepribadianSearch extends TypeKepribadian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_type', 'id_ei', 'id_sn', 'id_tf', 'id_jp', 'id_user', 'id_tes'], 'integer'],
            [['type_ei', 'type_sn', 'type_tf', 'type_jp'], 'safe'],
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
        $query = TypeKepribadian::find();

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
            'id_type' => $this->id_type,
            'id_ei' => $this->id_ei,
            'id_sn' => $this->id_sn,
            'id_tf' => $this->id_tf,
            'id_jp' => $this->id_jp,
            'id_user' => $this->id_user,
            'id_tes' => $this->id_tes,
        ]);

        $query->andFilterWhere(['like', 'type_ei', $this->type_ei])
            ->andFilterWhere(['like', 'type_sn', $this->type_sn])
            ->andFilterWhere(['like', 'type_tf', $this->type_tf])
            ->andFilterWhere(['like', 'type_jp', $this->type_jp]);

        return $dataProvider;
    }
}
