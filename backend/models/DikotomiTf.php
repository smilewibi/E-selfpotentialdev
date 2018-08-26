<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dikotomi_tf".
 *
 * @property int $id_tf
 * @property int $id_tes
 * @property int $tot_jwb_a
 * @property int $tot_jwb_b
 * @property int $id_user
 * @property int $id_kategori
 *
 * @property Kategori $kategori
 * @property Tesmbti $tes
 * @property User $user
 * @property TypeKepribadian[] $typeKepribadians
 */
class DikotomiTf extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dikotomi_tf';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tes', 'tot_jwb_a', 'tot_jwb_b', 'id_user', 'id_kategori'], 'required'],
            [['id_tes', 'tot_jwb_a', 'tot_jwb_b', 'id_user', 'id_kategori'], 'integer'],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['id_kategori' => 'id_kategori']],
            [['id_tes'], 'exist', 'skipOnError' => true, 'targetClass' => Tesmbti::className(), 'targetAttribute' => ['id_tes' => 'id_tes']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tf' => 'Id Tf',
            'id_tes' => 'Id Tes',
            'tot_jwb_a' => 'Tot Jwb A',
            'tot_jwb_b' => 'Tot Jwb B',
            'id_user' => 'Id User',
            'id_kategori' => 'Id Kategori',
        ];
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
    public function getTes()
    {
        return $this->hasOne(Tesmbti::className(), ['id_tes' => 'id_tes']);
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
    public function getTypeKepribadians()
    {
        return $this->hasMany(TypeKepribadian::className(), ['id_tf' => 'id_tf']);
    }
}
