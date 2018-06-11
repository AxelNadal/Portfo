<?php

namespace App\Http\Controllers;

use App\Edit;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(){
        return view('admin.edit.index');
    }
}
