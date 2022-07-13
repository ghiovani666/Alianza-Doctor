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

class ActividadesController extends Controller
{
    public function web_actividad(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(21))->get();
    	return view('web.pages.web_actividad')->with(compact('data_'));
    }
}