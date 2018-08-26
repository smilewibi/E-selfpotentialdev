<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "type_kepribadian".
 *
 * @property int $id_type
 * @property int $id_ei
 * @property string $type_ei
 * @property int $id_sn
 * @property string $type_sn
 * @property int $id_tf
 * @property string $type_tf
 * @property int $id_jp
 * @property string $type_jp
 * @property int $id_user
 * @property int $id_tes
 *
 * @property Kepribadian[] $kepribadians
 * @property Tesmbti $tes
 * @property DikotomiEi $ei
 * @property DikotomiSn $sn
 * @property DikotomiTf $tf
 * @property DikotomiJp $jp
 * @property User $user
 */
class TypeKepribadian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_kepribadian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ei', 'type_ei', 'id_sn', 'type_sn', 'id_tf', 'type_tf', 'id_jp', 'type_jp', 'id_user', 'id_tes'], 'required'],
            [['id_ei', 'id_sn', 'id_tf', 'id_jp', 'id_user', 'id_tes'], 'integer'],
            [['type_ei', 'type_sn', 'type_tf', 'type_jp'], 'string', 'max' => 1],
            [['id_tes'], 'exist', 'skipOnError' => true, 'targetClass' => Tesmbti::className(), 'targetAttribute' => ['id_tes' => 'id_tes']],
            [['id_ei'], 'exist', 'skipOnError' => true, 'targetClass' => DikotomiEi::className(), 'targetAttribute' => ['id_ei' => 'id_ei']],
            [['id_sn'], 'exist', 'skipOnError' => true, 'targetClass' => DikotomiSn::className(), 'targetAttribute' => ['id_sn' => 'id_sn']],
            [['id_tf'], 'exist', 'skipOnError' => true, 'targetClass' => DikotomiTf::className(), 'targetAttribute' => ['id_tf' => 'id_tf']],
            [['id_jp'], 'exist', 'skipOnError' => true, 'targetClass' => DikotomiJp::className(), 'targetAttribute' => ['id_jp' => 'id_jp']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_type' => 'Id Type',
            'id_ei' => 'Id Ei',
            'type_ei' => 'Type Ei',
            'id_sn' => 'Id Sn',
            'type_sn' => 'Type Sn',
            'id_tf' => 'Id Tf',
            'type_tf' => 'Type Tf',
            'id_jp' => 'Id Jp',
            'type_jp' => 'Type Jp',
            'id_user' => 'Id User',
            'id_tes' => 'Id Tes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKepribadians()
    {
        return $this->hasMany(Kepribadian::className(), ['id_type' => 'id_type']);
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
    public function getEi()
    {
        return $this->hasOne(DikotomiEi::className(), ['id_ei' => 'id_ei']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSn()
    {
        return $this->hasOne(DikotomiSn::className(), ['id_sn' => 'id_sn']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTf()
    {
        return $this->hasOne(DikotomiTf::className(), ['id_tf' => 'id_tf']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJp()
    {
        return $this->hasOne(DikotomiJp::className(), ['id_jp' => 'id_jp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
