<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tesmbti".
 *
 * @property int $id_tes
 * @property string $Soal
 * @property string $Jwb_a
 * @property string $Jwb_b
 * @property int $id_kategori
 *
 * @property DikotomiEi[] $dikotomiEis
 * @property DikotomiJp[] $dikotomiJps
 * @property DikotomiSn[] $dikotomiSns
 * @property DikotomiTf[] $dikotomiTfs
 * @property Kategori $kategori
 * @property TypeKepribadian[] $typeKepribadians
 */
class Tesmbti extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tesmbti';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Soal', 'Jwb_a', 'Jwb_b', 'id_kategori'], 'required'],
            [['Soal'], 'string'],
            [['id_kategori'], 'integer'],
            [['Jwb_a', 'Jwb_b'], 'string', 'max' => 50],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['id_kategori' => 'id_kategori']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tes' => 'Id Tes',
            'Soal' => 'Soal',
            'Jwb_a' => 'Jwb A',
            'Jwb_b' => 'Jwb B',
            'id_kategori' => 'Id Kategori',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDikotomiEis()
    {
        return $this->hasMany(DikotomiEi::className(), ['id_tes' => 'id_tes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDikotomiJps()
    {
        return $this->hasMany(DikotomiJp::className(), ['id_tes' => 'id_tes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDikotomiSns()
    {
        return $this->hasMany(DikotomiSn::className(), ['id_tes' => 'id_tes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDikotomiTfs()
    {
        return $this->hasMany(DikotomiTf::className(), ['id_tes' => 'id_tes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypeKepribadians()
    {
        return $this->hasMany(TypeKepribadian::className(), ['id_tes' => 'id_tes']);
    }
}
