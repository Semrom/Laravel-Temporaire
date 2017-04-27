<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // Fichier crée avec la commande "php artisan make:controller WelcomeController"

    public function index() {

    	return view('welcome');
    }
}
