<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property int $id_kategori
 * @property string $kategori
 *
 * @property DikotomiEi[] $dikotomiEis
 * @property DikotomiJp[] $dikotomiJps
 * @property DikotomiSn[] $dikotomiSns
 * @property DikotomiTf[] $dikotomiTfs
 * @property Tesmbti[] $tesmbtis
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kategori'], 'required'],
            [['kategori'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'kategori' => 'Kategori',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDikotomiEis()
    {
        return $this->hasMany(DikotomiEi::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDikotomiJps()
    {
        return $this->hasMany(DikotomiJp::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDikotomiSns()
    {
        return $this->hasMany(DikotomiSn::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDikotomiTfs()
    {
        return $this->hasMany(DikotomiTf::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTesmbtis()
    {
        return $this->hasMany(Tesmbti::className(), ['kategori' => 'id_kategori']);
    }
}
