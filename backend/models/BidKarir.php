<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bid_karir".
 *
 * @property int $id_bid_karir
 * @property string $nm_bid
 *
 * @property Karir[] $karirs
 */
class BidKarir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bid_karir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nm_bid'], 'required'],
            [['nm_bid'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_bid_karir' => 'Id Bid Karir',
            'nm_bid' => 'Nama Bidang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKarirs()
    {
        return $this->hasMany(Karir::className(), ['id_bid_karir' => 'id_bid_karir']);
    }
}
