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

class HomeController extends Controller
{
    public function index(){
        $slider = DB::table('web_home')->whereIn('id_home', array(1, 2))->get();
        $bienvenidos = DB::table('web_home')->whereIn('id_home', array(6, 21,22,23))->get();
        $ventajas = DB::table('web_codemirror')->whereIn('id', array(23))->get();
        $nuestras_actividades = DB::table('web_nuestra_actividad')->get();
        $nuestro_estudio = DB::table('web_nuestro_estudio')->join('web_nuestro_estudio_categoria', 'web_nuestro_estudio.id_estudio_categoria', '=', 'web_nuestro_estudio_categoria.id_estudio_categoria')->get();
        
        $nuestro_estudio_categoria = DB::table('web_nuestro_estudio_categoria')->get();
    	return view('web.pages.web_index')->with(compact('slider'))->with(compact('bienvenidos'))->with(compact('ventajas'))->with(compact('nuestras_actividades'))->with(compact('nuestro_estudio_categoria'))->with(compact('nuestro_estudio'));
    }

    public function linkActividad(Request $request){
        $data_ = DB::table('web_nuestra_actividad')->where('id_actividad', $request->idActividad)->get();
    	return view('web.pages.linkActividad')->with(compact('data_'));
    }

     public function web_login(){
    	return view('web.pages.web_login');
    }
    
    public function enviar_email_informacion(Request $request)
    {

        Mail::to('ghiovani999@gmail.com')
        ->send(new EnviarCorreosInfo([
            'txt_nombre' => $request->txt_nombre,
            'txt_email' => $request->txt_email,
            'txt_telefono' => $request->txt_telefono,
            'txt_asunto' => $request->txt_asunto,
            'txt_descripcion' => $request->txt_descripcion,
        ])); 
        return redirect()->back()->with(['success' => 'Formulario de contacto Enviar correctamente']);
    }

    public function web_blog(){
    	return view('web.pages.web_blog');
    }

    public function web_contacto(){
    	return view('web.pages.web_contacto');
    }

}