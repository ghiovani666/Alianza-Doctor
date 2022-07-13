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

class ServicioController extends Controller
{


    public function viewServicioFisio(){
        $rowData_ = DB::table('web_servicio')->get();
        $rowData_opciones = DB::table('web_servicio_titulo')
        ->join('web_servicio_descripcion', 'web_servicio_titulo.id_titulo', '=', 'web_servicio_descripcion.id_titulo')
        ->join('web_servicio', 'web_servicio_titulo.id_servicio', '=', 'web_servicio.id_servicio')
        ->where('web_servicio.id_servicio', '=', 3)->get()->toArray();

        $result = array();
        foreach ($rowData_opciones as $element) {
            $result[$element->titulo_principal][] =  [
                "id_descripcion"=>$element->id_descripcion,
                "id_titulo"=>$element->id_titulo,
                "titulo_principal"=>$element->titulo_principal,
                "title"=>$element->title,
                "descripcion"=>$element->descripcion,
                "url_image"=>$element->url_image,
                "url_link"=>$element->url_link,
            ];
        }

    	return view('web.pages.actividad.web_curso_basico')->with(compact('rowData_'))
        ->with(compact('result'));
    }

    public function viewServicioInfo(Request $request){
        $rowData = DB::table('web_servicio_descripcion')->where('web_servicio_descripcion.id_descripcion', '=',$request->id)->get();
    	return view('web.layouts.pages.servicio.info_servicio.infoservicio')->with(compact('rowData'));
    }
    
}
