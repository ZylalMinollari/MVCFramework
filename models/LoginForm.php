<?php

namespace app\models;

use app\core\Model;

class LoginForm extends Model
{
    public string $email = '';
    public string $password = '';

    public function rules()
    {

        return [
            'email' => [self::RULE_EMAIL, self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    public function labels()
    {
        return [
            'email' => 'Your Email',
            'password' => 'Password'
        ];
    }

    public function login() {
        $user = User::findOne(['email' => $this->email]);
        // var_dump($user);die;
        if(!$user) {
            $this->addError('email', 'User doesnot exists with email address');
            return false;
        }

        if(!password_verify($this->password, $user->password)) {
            $this->addError('password', 'Password incorrect');
            return false;
        }
        return true;
    }
}
