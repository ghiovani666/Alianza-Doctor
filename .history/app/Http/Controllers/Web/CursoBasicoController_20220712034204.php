<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Session;
//ENVIAR CORREOS
use Mail;
use App\Mail\EnviarCorreosInfo;

class CursoBasicoController extends Controller
{
    public function web_curso_basico(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(25))->get();
    	return view('web.pages.web_curso_basico')->with(compact('data_'));
    }
}