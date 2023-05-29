<?php

namespace App\Controllers;

use App\Controllers\Controller;

class GameController extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['id'])) {
            redirect('Deconnexion');
        }
    }

    public function index()
    {
        return view('auth.Game');
    }
}