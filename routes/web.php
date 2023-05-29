<?php

use App\Route;

Route::get(['/', 'App\Controllers\HomeController@index'])->name('Accueil');

// Connexion - Déconnexion
Route::get(['/connexion', 'App\Controllers\AuthController@login'])->name('Connexion');
Route::get(['/deconnexion', 'App\Controllers\AuthController@logout'])->name('Deconnexion');
Route::get(['/inscription', 'App\Controllers\SubscrireController@login'])->name('Inscription');

// Private
Route::get(['/tableau-de-bord', 'App\Controllers\DashboardController@index'])->name('Tableau de bord');
Route::get(['/perso', 'App\Controllers\PersoController@index'])->name('Perso');
Route::get(['/game', 'App\Controllers\GameController@index'])->name('Game');
Route::get(['/shop', 'App\Controllers\ShopController@index'])->name('Shop');
Route::get(['/settings', 'App\Controllers\SettingsController@index'])->name('Settings');

// Private - Univers
Route::get(['/univers1', 'App\Controllers\Univers1Controller@index'])->name('Univers1');
Route::get(['/univers1-niveau1', 'App\Controllers\Univers1Niv1Controller@index'])->name('Univers1Niv1');