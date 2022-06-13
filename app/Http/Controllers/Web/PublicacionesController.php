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

class PublicacionesController extends Controller
{
    public function web_publicacion_internacional(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(12))->get();
    	return view('web.pages.publicacion.web_publicacion_internacional')->with(compact('data_'));
    }

    public function web_saludnatural(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(13))->get();
    	return view('web.pages.publicacion.web_saludnatural')->with(compact('data_'));
    }

    public function web_informativos(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(14))->get();
    	return view('web.pages.publicacion.web_informativos')->with(compact('data_'));
    }

    public function web_revistas(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(15))->get();
    	return view('web.pages.publicacion.web_revistas')->with(compact('data_'));
    }

    public function web_productos_saludables(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(16))->get();
    	return view('web.pages.publicacion.web_productos_saludables')->with(compact('data_'));
    }

    public function web_investigaciones(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(17))->get();
    	return view('web.pages.publicacion.web_investigaciones')->with(compact('data_'));
    }

    public function web_barletta(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(18))->get();
    	return view('web.pages.publicacion.web_barletta')->with(compact('data_'));
    }

    public function web_boletines(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(19))->get();
    	return view('web.pages.publicacion.web_boletines')->with(compact('data_'));
    }

    public function web_libros(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(20))->get();
    	return view('web.pages.publicacion.web_libros')->with(compact('data_'));
    }

}