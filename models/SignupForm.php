<?php

namespace app\models;

use yii\base\Model;
use yii\helpers\VarDumper;

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
            [['email'], 'email'],
        ];
    }

    public function signup()
    {
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->password = \Yii::$app->security->generatePasswordHash($this->passowrd);
        $user->access_token = \Yii::$app->security->generateRandomString();
        $user->auth_key = \Yii::$app->security->generateRandomString();

        if ($user->save()) {
            return true;
        }

        \Yii::error(("User was not saved" . VarDumper::dumpAsString($user->errors)));
        return false;
    }
}
