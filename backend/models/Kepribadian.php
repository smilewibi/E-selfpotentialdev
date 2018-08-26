<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kepribadian".
 *
 * @property int $id_kepribadian
 * @property int $id_type
 * @property string $nama_type
 * @property string $sinopsis
 * @property string $kelebihan
 * @property string $kekurangan
 * @property string $motivasi
 * @property int $id_bid_karir
 * @property int $id_user
 *
 * @property User $user
 * @property TypeKepribadian $type
 * @property BidKarir $bidKarir
 * @property PotensiKepribadian[] $potensiKepribadians
 */
class Kepribadian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kepribadian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_type', 'nama_type', 'sinopsis', 'kelebihan', 'kekurangan', 'motivasi', 'id_bid_karir', 'id_user'], 'required'],
            [['id_type', 'id_bid_karir', 'id_user'], 'integer'],
            [['sinopsis', 'kelebihan', 'kekurangan', 'motivasi'], 'string'],
            [['nama_type'], 'string', 'max' => 4],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => TypeKepribadian::className(), 'targetAttribute' => ['id_type' => 'id_type']],
            [['id_bid_karir'], 'exist', 'skipOnError' => true, 'targetClass' => BidKarir::className(), 'targetAttribute' => ['id_bid_karir' => 'id_bid_karir']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kepribadian' => 'Id Kepribadian',
            'id_type' => 'Id Type',
            'nama_type' => 'Nama Type',
            'sinopsis' => 'Sinopsis',
            'kelebihan' => 'Kelebihan',
            'kekurangan' => 'Kekurangan',
            'motivasi' => 'Motivasi',
            'id_bid_karir' => 'Id Bid Karir',
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
    public function getType()
    {
        return $this->hasOne(TypeKepribadian::className(), ['id_type' => 'id_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBidKarir()
    {
        return $this->hasOne(BidKarir::className(), ['id_bid_karir' => 'id_bid_karir']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPotensiKepribadians()
    {
        return $this->hasMany(PotensiKepribadian::className(), ['id_kepribadian' => 'id_kepribadian']);
    }
}
