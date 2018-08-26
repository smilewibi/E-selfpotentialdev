<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tes_tpa".
 *
 * @property int $id_tpa
 * @property string $soal
 * @property string $jwb_a
 * @property string $jwb_b
 * @property string $jwb_c
 * @property string $jwb_d
 * @property string $jwb_e
 * @property string $jwb_bnr
 * @property int $id_karir
 *
 * @property PotensiKepribadian[] $potensiKepribadians
 * @property Karir $karir
 */
class TesTpa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tes_tpa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['soal', 'jwb_a', 'jwb_b', 'jwb_c', 'jwb_d', 'jwb_e', 'jwb_bnr', 'id_karir'], 'required'],
            [['soal', 'jwb_a', 'jwb_b', 'jwb_c', 'jwb_d', 'jwb_e', 'jwb_bnr'], 'string'],
            [['id_karir'], 'integer'],
            [['id_karir'], 'exist', 'skipOnError' => true, 'targetClass' => Karir::className(), 'targetAttribute' => ['id_karir' => 'id_karir']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tpa' => 'Id Tpa',
            'soal' => 'Soal',
            'jwb_a' => 'Jwb A',
            'jwb_b' => 'Jwb B',
            'jwb_c' => 'Jwb C',
            'jwb_d' => 'Jwb D',
            'jwb_e' => 'Jwb E',
            'jwb_bnr' => 'Jwb Bnr',
            'id_karir' => 'Id Karir',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPotensiKepribadians()
    {
        return $this->hasMany(PotensiKepribadian::className(), ['id_tes_tpa' => 'id_tpa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKarir()
    {
        return $this->hasOne(Karir::className(), ['id_karir' => 'id_karir']);
    }
}
