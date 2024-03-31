<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        //TODO Нужен сервис который будет формировать необходимые переменные для страницы и передавать их во view
        return view('pages.home');
    }
}
