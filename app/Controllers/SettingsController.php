<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;

class SettingsController extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['id'])) {
            redirect('Deconnexion');
        }
    }

    public function index()
    {
        $checker = $this->modifUser();
        return view('auth.settings', compact('checker'));
    }

    private function modifUser(){
        if (isset($_POST['check']) && $_POST['check'] === 'ok'){
            if (isset($_POST['pseudo']) && $_POST['pseudo']!== '' &&
                isset($_POST['email']) && $_POST['email'] !== ''
             ){
                if ($_POST['pseudo'] !== $_SESSION['firstname']||
                    $_POST['email'] !== $_SESSION['email']) {
                    User::ModifUser($_SESSION['id'],$_POST['pseudo'],$_POST['email']);
                    $_SESSION['firstname'] = $_POST['pseudo'];
                    $_SESSION['email'] = $_POST['email'];
                }
            }
        }
    }
}