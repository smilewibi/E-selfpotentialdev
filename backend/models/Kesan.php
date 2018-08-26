<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kesan".
 *
 * @property int $id_kesan
 * @property string $tgl_jam
 * @property string $judul
 * @property string $kesan
 * @property int $id_user
 *
 * @property User $user
 */
class Kesan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kesan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tgl_jam', 'judul', 'kesan', 'id_user'], 'required'],
            [['tgl_jam'], 'safe'],
            [['kesan'], 'string'],
            [['id_user'], 'integer'],
            [['judul'], 'string', 'max' => 100],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kesan' => 'Id Kesan',
            'tgl_jam' => 'Tgl Jam',
            'judul' => 'Judul',
            'kesan' => 'Kesan',
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
}
