<?php

namespace App\Http\Controllers;

use App\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index(){
        return view('admin.projet.index');
    }
}
