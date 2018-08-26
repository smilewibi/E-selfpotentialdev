<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "karir".
 *
 * @property int $id_karir
 * @property string $nm_karir
 * @property int $id_bid_karir
 *
 * @property BidKarir $bidKarir
 */
class Karir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'karir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nm_karir', 'id_bid_karir'], 'required'],
            [['id_bid_karir'], 'integer'],
            [['nm_karir'], 'string', 'max' => 32],
            [['id_bid_karir'], 'exist', 'skipOnError' => true, 'targetClass' => BidKarir::className(), 'targetAttribute' => ['id_bid_karir' => 'id_bid_karir']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_karir' => 'Id Karir',
            'nm_karir' => 'Nm Karir',
            'id_bid_karir' => 'Id Bid Karir',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBidKarir()
    {
        return $this->hasOne(BidKarir::className(), ['id_bid_karir' => 'id_bid_karir']);
    }
}
