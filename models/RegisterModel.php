<?php
namespace app\models;

use app\core\Model;

/**
 * Summary of RegisteModel
 * @author ZYLAL
 * @copyright (c) 2022
 */
class RegisterModel extends Model
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $passwordConfirm;

    public function register()
    {
        echo 'Creating a User';
    }

    public function rules(): array
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email ' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'min' => '8'],[self::RULE_MATCH, 'max' => '24']],
            'passwordConfirm' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }
}