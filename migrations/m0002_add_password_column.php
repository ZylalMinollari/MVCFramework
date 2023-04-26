<?php

use app\core\Aplication;

/**
* Summary of migrations
* @author ZYLAL
* @copyright (c) 2023
*/
class m0002_add_password_column {

    public function up() {
        
        $db = Aplication::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL");
    }

    public function down() {

        $db = Aplication::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL");
    }
} 