<?php

namespace app\models;

use yii\base\Model;
use yii\bootstrap4\Modal;

class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_repeat;

    public function rules()
    {
        return [
            [['username', 'email', 'password', 'password_repeat'], 'required'],
            [['username', 'password'], 'string', 'min' => 4, 'max' => 16],
            [['email'], 'email', 'required'],
        ];
    }
}
