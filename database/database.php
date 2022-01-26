<?php

// class Database {
//     public static $instance = null;
//     public static function getInstance()
//     {
//         if(is_null(self::$instance)) {
//             self::$instance = new \PDO('mysql:dbname=manu_battle;host=localhost;charset=utf8', 'root', '', [
//                 \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
//                 \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
//             ]);
//         }
//         return self::$instance;
//     }
//   }


class Dbh {

    protected function connect() {
        try {
            $username = "root";
            $password = "";
            return $dbh = new PDO('mysql:dbname=manu_battle;host=localhost;charset=utf8', $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}
