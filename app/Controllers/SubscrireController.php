<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;

class SubscrireController extends Controller
{
    public function login()
    {
        $checker = $this->createAccount();
        return view('auth.Subscrire', compact('checker'));
    }

    public function logout()
    {
        session_destroy();
        redirect('Accueil');
    }

    private function createAccount() {

        if (isset($_POST['check']) && $_POST['check'] === 'ok') {
            if (isset($_POST['email']) && $_POST['email'] !== '' && 
                isset($_POST['pseudo']) && $_POST['pseudo'] !== '' &&
                isset($_POST['password']) && $_POST['password'] !== '' &&
                isset($_POST['password2']) && $_POST['password2'] !== '') {
                    if($_POST['password'] == $_POST['password2']){
                        if (!User::verifUser($_POST['email'], $_POST['password'])) {
                            return "L'un des identifiants est déjà pris";
                        }else{
                        User::createUser($_POST['pseudo'],$_POST['email'], $_POST['password']);
                            }

                    }else{
                        return "Les mots de passes ne sont pas identique";
                    }
                    
            }else {
                return "L'email doit être renseigné";
            }
        }
    }

    
}