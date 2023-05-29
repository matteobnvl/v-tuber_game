<?php

namespace App\Models;
use App\Controllers\Controller;
use App\Models\Model;

class User extends Model
{
    public static function selectAll()
    {
        $db = self::db();
        $qry = "SELECT * FROM users";
        $stt = $db->prepare($qry);
        $stt->execute();
        return $stt->fetchAll(\PDO::FETCH_ASSOC);
    }





    public static function checkUser($email, $pwd) {

        $db = self::db();
        $qry = "SELECT id, firstname, email FROM users WHERE email = :email AND password = :password";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':email' => $email,
            ':password' => md5($pwd)
        ]);
        $user = $stt->fetch(\PDO::FETCH_ASSOC);

        if ($stt->rowCount() > 0) {

            foreach ($user as $key => $value) {
                $_SESSION[$key] = $value;
            }
            return true;
        }
        return false;
    }

    public static function createUser($pseudo, $email, $pwd){
        $db = self::db();
        $qry = "INSERT Into users (firstname, email, password) VALUES (:pseudo, :email, :password ) ";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':pseudo' => $pseudo,
            ':email' => $email,
            ':password' => md5($pwd)
        ]);
        User::checkUser($email, $pwd);
        redirect('Tableau de bord');

        
    }

    public static function verifUser($pseudo, $email){
        $db = self::db();
        $qry = "SELECT firstname, email FROM users";
        $stt = $db->prepare($qry);
        $stt->execute([]);

        $user = $stt->fetch(\PDO::FETCH_ASSOC);

        foreach ($user as $key => $value) {
            if ($user['firstname'] == $pseudo) {
                return false;
            }
            if ($user['email'] == $email) {
                return false;
            }
            else{
                return true;
            }
        }


    }

    public static function ModifUser($id, $pseudo, $email){
        $db = self::db();
        $qry = "UPDATE users SET firstname = :pseudo, email = :email where id = :id";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':id' => $id,
            ':pseudo' => $pseudo,
            ':email' => $email ]);

        User::checkUser($pseudo, $email);   

    }
}


