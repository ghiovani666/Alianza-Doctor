<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Filesystem\Filesystem;


class ActividadesController extends Controller {

  public function admin_actividad() {
    $data_ = DB::table('web_codemirror')->whereIn('id', array(21))->get();
    return view('admin.pages.actividad.admin_actividad')->with(compact('data_'));
  }

  public function admin_actividad_update(Request $request) 
  {       
      $data =  DB::table('web_codemirror')->where("id",21)->update(['descripcion' => $request->txt_descripcion]); 
      return $data;
  }

  public function admin_curso_basico() {

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

    var_dump($result);exit;

    $data_ = DB::table('web_codemirror')->whereIn('id', array(25))->get();
    return view('admin.pages.actividad.admin_curso_basico')
    ->with(compact('data_'))
    ->with(compact('result'))
    ->with(compact('rowData_'));
  }

  public function admin_curso_basico_update(Request $request) 
  {       
      $data =  DB::table('web_codemirror')->where("id",25)->update(['descripcion' => $request->txt_descripcion]); 
      return $data;
  }


 
}