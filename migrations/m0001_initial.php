<?php

use app\core\Aplication;

/**
* Summary of migrations
* @author ZYLAL
* @copyright (c) 2023
*/
class m0001_initial {

    public function up() {

        $db = Aplication::$app->db;

        $SQL = "CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL,
            firstname VARCHAR(255) NOT NULL,
            lastname VARCHAR(255) NOT NULL,
            status TINYINT DEFAULT 0,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )  ENGINE=INNODB;";

        $db->pdo->exec($SQL);
    }

    public function down() {

        $db = Aplication::$app->db;

        $SQL = "DROP TABLE users;";

        $db->pdo->exec($SQL);
    }
} 