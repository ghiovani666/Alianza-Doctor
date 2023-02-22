<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
//ENVIAR CORREOS
use Mail;
use App\Mail\EnviarCorreosInfo;

class PublicacionesController extends Controller
{
    public function web_publicacion_internacional(){

        $web_publicaciones = DB::table('web_publicaciones')
        ->join('web_publicaciones_categoria', 'web_publicaciones.id_publicacion_categoria', '=', 'web_publicaciones_categoria.id_publicacion_categoria')->get();

        return view('web.pages.publicacion.web_publicacion_internacional')
                ->with(compact('web_publicaciones'));

        // $data_ = DB::table('web_codemirror')->whereIn('id', array(12))->get();
        // if(Auth::check())
        //     return view('web.pages.publicacion.web_publicacion_internacional')->with(compact('slider'))->with(compact('bienvenidos'))->with(compact('ventajas'))->with(compact('nuestras_actividades'))->with(compact('nuestro_estudio_categoria'))->with(compact('web_publicaciones'));
        // else
        //      return json_encode(['data' =>  'Usted no tiene una cuenta, registrese','state' => 'login']);
    }

    public function web_saludnatural(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(13))->get();
        if(Auth::check())
    	return view('web.pages.publicacion.web_saludnatural')->with(compact('data_'));
        else
        return json_encode(['data' =>  'Usted no tiene una cuenta, registrese','state' => 'login']);
    }

    public function web_informativos(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(14))->get();
        if(Auth::check())
    	return view('web.pages.publicacion.web_informativos')->with(compact('data_'));
        else
        return json_encode(['data' =>  'Usted no tiene una cuenta, registrese','state' => 'login']);
    }

    public function web_revistas(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(15))->get();
        if(Auth::check())
    	return view('web.pages.publicacion.web_revistas')->with(compact('data_'));
        else
        return json_encode(['data' =>  'Usted no tiene una cuenta, registrese','state' => 'login']);
    }

    public function web_productos_saludables(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(16))->get();
        if(Auth::check())
    	return view('web.pages.publicacion.web_productos_saludables')->with(compact('data_'));
        else
        return json_encode(['data' =>  'Usted no tiene una cuenta, registrese','state' => 'login']);
    }

    public function web_investigaciones(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(17))->get();
        if(Auth::check())
    	return view('web.pages.publicacion.web_investigaciones')->with(compact('data_'));
        else
        return json_encode(['data' =>  'Usted no tiene una cuenta, registrese','state' => 'login']);
    }

    public function web_barletta(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(18))->get();
        if(Auth::check())
    	return view('web.pages.publicacion.web_barletta')->with(compact('data_'));
        else
        return json_encode(['data' =>  'Usted no tiene una cuenta, registrese','state' => 'login']);
    }

    public function web_boletines(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(19))->get();
        if(Auth::check())
    	return view('web.pages.publicacion.web_boletines')->with(compact('data_'));
        else
        return json_encode(['data' =>  'Usted no tiene una cuenta, registrese','state' => 'login']);
    }

    public function web_libros(){
        $data_ = DB::table('web_codemirror')->whereIn('id', array(20))->get();
        if(Auth::check())
    	return view('web.pages.publicacion.web_libros')->with(compact('data_'));
        else
        return json_encode(['data' =>  'Usted no tiene una cuenta, registrese','state' => 'login']);
    }

}