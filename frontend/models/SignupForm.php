<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
	public $username;
	public $nama_depan;
	public $nama_belakang;
	public $tempat_lahir;
	public $tanggal_lahir;
	public $golongan_darah;
	public $telepon;
    public $alamat;
    public $email;
    public $password;
	public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
			['nama_depan', 'required'],
			['nama_belakang', 'required'],
			['tempat_lahir', 'required'],
			['tanggal_lahir', 'required'],
			['golongan_darah','required'],
			['telepon', 'required'],
			['alamat', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
			// verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

	/**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }
	
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
		$user->nama_depan = $this->nama_depan;
		$user->nama_belakang = $this->nama_belakang;
		$user->tempat_lahir = $this->tempat_lahir;
		$user->tanggal_lahir = $this->tanggal_lahir;
		$user->golongan_darah = $this->golongan_darah;
		$user->telepon = $this->telepon;
		$user->alamat = $this->alamat;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
