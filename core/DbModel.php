<?php

namespace app\core;

/**
 * Summary of Aplication
 * @author ZYLAL
 * @copyright (c) 2022
 * 
 */

abstract class DbModel extends Model
{

    abstract public static function tableName(): string;

    abstract public function attributes(): array;

    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn ($attr) => ":$attr", $attributes);
        $statement = $this->prepare("INSERT INTO $tableName (" . implode(",", $attributes) . ")
        VALUES (" . implode(",", $params) . ")");

        foreach ($attributes as $attribute) {

            $statement->bindValue(":$attribute", $this->{$attribute});
        }

        $statement->execute();

        return true;
    }

    public static function prepare($sql)
    {

        return Aplication::$app->db->pdo->prepare($sql);
    }
}
