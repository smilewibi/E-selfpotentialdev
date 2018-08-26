<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $nama_depan
 * @property string $nama_belakang
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $golongan_darah
 * @property int $telepon
 * @property string $alamat
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property DikotomiEi[] $dikotomiEis
 * @property DikotomiJp[] $dikotomiJps
 * @property DikotomiSn[] $dikotomiSns
 * @property Kepribadian[] $kepribadians
 * @property Kesan[] $kesans
 * @property Pesan[] $pesans
 * @property PotensiKepribadian[] $potensiKepribadians
 * @property TypeKepribadian[] $typeKepribadians
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'nama_depan', 'nama_belakang', 'tempat_lahir', 'tanggal_lahir', 'telepon', 'alamat', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['telepon', 'status', 'created_at', 'updated_at'], 'integer'],
            [['alamat'], 'string'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['nama_depan', 'nama_belakang', 'tempat_lahir', 'auth_key'], 'string', 'max' => 32],
            [['golongan_darah'], 'string', 'max' => 2],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'nama_depan' => 'Nama Depan',
            'nama_belakang' => 'Nama Belakang',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'golongan_darah' => 'Golongan Darah',
            'telepon' => 'Telepon',
            'alamat' => 'Alamat',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDikotomiEis()
    {
        return $this->hasMany(DikotomiEi::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDikotomiJps()
    {
        return $this->hasMany(DikotomiJp::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDikotomiSns()
    {
        return $this->hasMany(DikotomiSn::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKepribadians()
    {
        return $this->hasMany(Kepribadian::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKesans()
    {
        return $this->hasMany(Kesan::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesans()
    {
        return $this->hasMany(Pesan::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPotensiKepribadians()
    {
        return $this->hasMany(PotensiKepribadian::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypeKepribadians()
    {
        return $this->hasMany(TypeKepribadian::className(), ['id_user' => 'id']);
    }
}
