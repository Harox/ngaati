<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function ajuda(){
        return view('pages.ajuda');
    }

    public function configuracoes(){
        return view('pages.configuracoes');
    }

    public function doadores(){
        return view('pages.doadores');
    }

    public function hemocentros(){
        return view('pages.hemocentros');
    }

    public function campanhas(){
        return view('pages.campanhas');
    }

    public function requisicoes(){
        return view('pages.requisicoes');
    }

    public function usuarios(){
        return view('pages.usuarios');
    }

}
