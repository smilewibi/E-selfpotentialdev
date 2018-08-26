<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "potensi_kepribadian".
 *
 * @property int $id_potensi
 * @property int $id_kepribadian
 * @property int $id_tes_tpa
 * @property int $id_user
 *
 * @property User $user
 * @property Kepribadian $kepribadian
 * @property TesTpa $tesTpa
 */
class PotensiKepribadian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'potensi_kepribadian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kepribadian', 'id_tes_tpa', 'id_user'], 'required'],
            [['id_kepribadian', 'id_tes_tpa', 'id_user'], 'integer'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_kepribadian'], 'exist', 'skipOnError' => true, 'targetClass' => Kepribadian::className(), 'targetAttribute' => ['id_kepribadian' => 'id_kepribadian']],
            [['id_tes_tpa'], 'exist', 'skipOnError' => true, 'targetClass' => TesTpa::className(), 'targetAttribute' => ['id_tes_tpa' => 'id_tpa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_potensi' => 'Id Potensi',
            'id_kepribadian' => 'Id Kepribadian',
            'id_tes_tpa' => 'Id Tes Tpa',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKepribadian()
    {
        return $this->hasOne(Kepribadian::className(), ['id_kepribadian' => 'id_kepribadian']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTesTpa()
    {
        return $this->hasOne(TesTpa::className(), ['id_tpa' => 'id_tes_tpa']);
    }
}
