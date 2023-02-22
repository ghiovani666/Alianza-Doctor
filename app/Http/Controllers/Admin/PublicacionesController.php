<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Filesystem\Filesystem;


class PublicacionesController extends Controller {

  //:::::::::::::::::::::::::: CRUD DE PUBLICACIONES ::::::::::::::::::::::::::

  public function admin_publicacion_internacional() {
    $rowData_ = DB::table('web_publicaciones_categoria')->get()->toArray();
    return view('admin.pages.publicacion.admin_publicacion_internacional')->with(compact('rowData_'));

  }

  public function listarPublicaciones(Request $request) {
    
    if(intval($request->txt_id_publicacion_categoria) > 0){
        $rowData_ = DB::table('web_publicaciones')->join('web_publicaciones_categoria', 'web_publicaciones.id_publicacion_categoria', '=', 'web_publicaciones_categoria.id_publicacion_categoria')
        ->where("web_publicaciones.id_publicacion_categoria", $request->txt_id_publicacion_categoria)
        ->get()->toArray();
    }else{
        $rowData_ = DB::table('web_publicaciones')->join('web_publicaciones_categoria', 'web_publicaciones.id_publicacion_categoria', '=', 'web_publicaciones_categoria.id_publicacion_categoria')
        ->get()->toArray();
    }
    return view('admin.pages.publicacion.ajax.tablaPublicacion')->with(compact('rowData_'));
}

  public function crearPublicacion(Request $request) 
  {        
      switch($request->isValues) {
        case 'CREAR': 
          $file = $request->file('image');
          
          if($file != NULL){
              $filename  =  time() .'_'.$file->getClientOriginalName();
              $path = "template_admin/img/mc_publicacion";
              $file->move($path,$filename);

              $result = DB::table('web_publicaciones')->insert([
                  'titulo'                    => $request->txt_titulo, 
                  'descripcion'               => $request->txt_descripcion,
                  'id_publicacion_categoria'  => $request->txt_id_publicacion_categoria,
                  'url_image'                 => '/template_admin/img/mc_publicacion/'.$filename, 
                  'created_at'                => date("Y-m-d H:i:s"),
                  'updated_at'                => date("Y-m-d H:i:s")
                ]);
                return json_encode(['data' => 'Creado el registro correctamente!','state' => 'ok']);
          }else{
                return json_encode(['data' => 'Error : subir imagen!','state' => 'error']);
              }

              break;
        case 'ACTUALIZAR': 
                $file = $request->file('image');

              if($file != NULL){
                $url_imagen =  DB::table('web_publicaciones')->where('id_publicacion', '=', $request->txt_id_estudio)->get();
              
                if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
                  unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
                }
                
                  $filename  =  time() .'_'.$file->getClientOriginalName(); 
                  $path = "template_admin/img/mc_publicacion";
                  $file->move($path,$filename); 
    
                  $result  =  DB::table('web_publicaciones')
                    ->where("id_publicacion",$request->txt_id_estudio)
                    ->update([
                      'titulo' => $request->txt_titulo, 
                      'descripcion' => $request->txt_descripcion,
                      'id_publicacion_categoria' => $request->txt_id_publicacion_categoria,
                      'url_image' => '/template_admin/img/mc_publicacion/'.$filename, 
                      'updated_at' =>date("Y-m-d H:i:s")
                      
                    ]); 
  
                    return json_encode(['data' => 'Actualizado el registro correctamente!','state' => 'ok','src' => '/template_admin/img/mc_publicacion/'.$filename]);

                }else{
                  $result  =  DB::table('web_publicaciones')
                  ->where("id_publicacion",$request->txt_id_estudio)
                  ->update([
                    'titulo' => $request->txt_titulo, 
                    'descripcion' => $request->txt_descripcion,
                    'id_publicacion_categoria' => $request->txt_id_publicacion_categoria,
                    'updated_at' =>date("Y-m-d H:i:s")
                  ]); 
                  return json_encode(['data' => 'Actualizado el registro correctamente!','state' => 'ok']);
                }

                break;

          case 'ELIMINAR': 
            $url_imagen =  DB::table('web_publicaciones')->where('id_publicacion', '=', $request->txt_id_estudio)->get();
            if(file_exists(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image))){
              unlink(str_replace('/template_admin/', 'template_admin/',  $url_imagen[0]->url_image));
            }
            DB::table('web_publicaciones')->where('id_publicacion', '=', $request->txt_id_estudio)->delete();
            return json_encode(['data' => 'Elimino el registro correctamente!','state' => 'ok']);
    
                break;

          case 'TEXTO': 

            $result  =  DB::table('web_publicaciones')
                ->where("id_publicacion",$request->txt_id_actividad)
                ->update([
                  'descripcion_texto' => $request->txt_descripcion_texto,
                  'updated_at' =>date("Y-m-d H:i:s")
                  
                ]); 
              return json_encode( $result);

          case 'TEXTO_CATEGORIA': 
            DB::table('web_publicaciones_categoria')->where("id_publicacion_categoria",1)->update(['nombre' => $request->txt_categoria_1,'updated_at' =>date("Y-m-d H:i:s")]); 
            DB::table('web_publicaciones_categoria')->where("id_publicacion_categoria",2)->update(['nombre' => $request->txt_categoria_2,'updated_at' =>date("Y-m-d H:i:s")]); 
            DB::table('web_publicaciones_categoria')->where("id_publicacion_categoria",3)->update(['nombre' => $request->txt_categoria_3,'updated_at' =>date("Y-m-d H:i:s")]); 
            DB::table('web_publicaciones_categoria')->where("id_publicacion_categoria",4)->update(['nombre' => $request->txt_categoria_4,'updated_at' =>date("Y-m-d H:i:s")]); 
            $result  =  DB::table('web_publicaciones_categoria')->where("id_publicacion_categoria",5)->update(['nombre' => $request->txt_categoria_5,'updated_at' =>date("Y-m-d H:i:s")]); 
            return json_encode( $result);

    }
  }


  public function editarPublicacion(Request $request) {
      $rowData_ = DB::table('web_publicaciones')
      ->where("web_publicaciones.id_publicacion", $request->txt_id_estudio)
      ->get()->toArray();
      return json_encode($rowData_);
  }

 



  public function editServicioGaleria(Request $request) {
    $rowData_ = DB::table('web_publicaciones')
    ->where("web_publicaciones.id_publicacion", $request->txt_id_estudio)
    ->get()->toArray();
    return json_encode($rowData_);
  }


}