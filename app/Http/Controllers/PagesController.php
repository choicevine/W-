<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function register(){
        return view('pages.index');
    }

    public function generate(){
        return view('pages.generate');
    }

    public function confirm(){
        return view('pages.confirm');
    }

    public function gangstar(){
        return view('pages.PHPGanstar');
    }

    public function authenticator(){
        return view('pages.authenticator');
    }

}
