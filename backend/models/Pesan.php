<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pesan".
 *
 * @property int $id_pesan
 * @property string $tgl_jam
 * @property string $judul
 * @property string $pesan
 * @property int $id_user
 *
 * @property User $user
 */
class Pesan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pesan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tgl_jam', 'judul', 'pesan', 'id_user'], 'required'],
            [['tgl_jam'], 'safe'],
            [['pesan'], 'string'],
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
            'id_pesan' => 'Id Pesan',
            'tgl_jam' => 'Tgl Jam',
            'judul' => 'Judul',
            'pesan' => 'Pesan',
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
