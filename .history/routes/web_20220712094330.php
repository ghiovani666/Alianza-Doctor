<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


    //::::::::::::::::::::::: WEB HOME ::::::::::::::::::::::::::
    Route::get('/',                                     'Web\HomeController@index')->name('index');
    Route::get('/web_login',                            'Web\HomeController@web_login')->name('web_login');
    Route::get('/web_blog',                             'Web\HomeController@web_blog');
    Route::get('/logout',                               'Auth\LoginController@logout');
    Route::get('/web_contacto',                         'Web\HomeController@web_contacto');
    Route::get('/linkActividad/{idActividad}',          'Web\HomeController@linkActividad');

    //::::::::::::::::::::::: WEB HOME - EMAIL ::::::::::::::::::::::::::
    Route::post('enviar_email_informacion', 'Web\HomeController@enviar_email_informacion');

    //::::::::::::::::::::::: WEB QUINES SOMOS ::::::::::::::::::::::::::
    Route::get('/web_quienes_somos',                'Web\QuienesSomosController@web_quienes_somos')->name('web_quienes_somos');
    //::::::::::::::::::::::: WEB CONTROLLER QUE HACEMOS ::::::::::::::::::::::::::
    Route::get('/web_quehacemos',                   'Web\QueHacemosController@web_quehacemos')->name('web_quehacemos');
    //::::::::::::::::::::::: WEB CONTROLLER MEDICINA CELULAR ::::::::::::::::::::::::::
    Route::get('/web_medicinacelular',              'Web\MedicinaCelularController@web_medicinacelular')->name('web_medicinacelular');
    //::::::::::::::::::::::: WEB CONTROLLER LA ALIANZA ::::::::::::::::::::::::::
    Route::get('/web_alianza',                      'Web\LaAlianzaController@web_alianza')->name('web_mathias_rath');
    Route::get('/web_mathias_rath',                 'Web\LaAlianzaController@web_mathias_rath')->name('web_mathias_rath');
    Route::get('/web_sustancias_vitales',           'Web\LaAlianzaController@web_sustancias_vitales')->name('web_sustancias_vitales');
    Route::get('/web_productos_naturales',          'Web\LaAlianzaController@web_productos_naturales')->name('web_productos_naturales');
    Route::get('/web_formacion',                    'Web\LaAlianzaController@web_formacion')->name('web_formacion');
    Route::get('/web_grupo_barcelona',              'Web\LaAlianzaController@web_grupo_barcelona')->name('web_grupo_barcelona');

    //::::::::::::::::::::::: WEB CONTROLLER INVESTIGACION ::::::::::::::::::::::::::
    Route::get('/web_investigacion',                'Web\InsInvestigacionController@web_investigacion')->name('web_investigacion');
    //::::::::::::::::::::::: WEB CONTROLLER FUNDACION ::::::::::::::::::::::::::
    Route::get('/web_fundacion',                    'Web\FundacionController@web_fundacion')->name('web_fundacion');
    //::::::::::::::::::::::: WEB CONTROLLER PUBLICACION ::::::::::::::::::::::::::
    Route::get('/web_publicacion_internacional',    'Web\PublicacionesController@web_publicacion_internacional')->name('web_publicacion_internacional');
    Route::get('/web_saludnatural',                 'Web\PublicacionesController@web_saludnatural')->name('web_saludnatural');
    Route::get('/web_informativos',                 'Web\PublicacionesController@web_informativos')->name('web_informativos');
    Route::get('/web_revistas',                     'Web\PublicacionesController@web_revistas')->name('web_revistas');
    Route::get('/web_productos_saludables',         'Web\PublicacionesController@web_productos_saludables')->name('web_productos_saludables');
    Route::get('/web_investigaciones',              'Web\PublicacionesController@web_investigaciones')->name('web_investigaciones');
    Route::get('/web_barletta',                     'Web\PublicacionesController@web_barletta')->name('web_barletta');
    Route::get('/web_boletines',                    'Web\PublicacionesController@web_boletines')->name('web_boletines');
    Route::get('/web_libros',                       'Web\PublicacionesController@web_libros')->name('web_libros');

    //::::::::::::::::::::::: WEB CONTROLLER ACTIVIDAD ::::::::::::::::::::::::::
    Route::get('/web_actividad',                    'Web\ActividadesController@web_actividad')->name('web_actividad');
    Route::get('/web_curso_basico',                 'Web\ActividadesController@web_curso_basico')->name('web_curso_basico');
    Route::get('/web_servicios_all/{id_servicio}',  'Web\ActividadesController@web_servicios_all')->name('web_servicios_all');
    Route::get('/viewServicioInfo/{id}',            'Web\ActividadesController@viewServicioInfo')->name('viewServicioInfo');


    //::::::::::::::::::::::: WEB CONTROLLER PROFESIONAL ::::::::::::::::::::::::::
    Route::get('/web_profesional',                  'Web\ProfesionalesController@web_profesional')->name('web_profesional');

    Auth::routes();
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {
    
        //::::::::::::::::::::::: ADMIN CONTROLLER ADMIN ::::::::::::::::::::::::::
        Route::get('/index',               'Admin\AdminController@index');
        Route::post('/general_imagen',     'Admin\AdminController@general_imagen');

        //::::::::::::::::::::::: ADMIN CONTROLLER HOME ::::::::::::::::::::::::::
        Route::get('/admin_home_slider',                            'Admin\HomeController@admin_home_slider');
        Route::post('/admin_home_slider_edit',                      'Admin\HomeController@admin_home_slider_edit');
        Route::post('/admin_home_slider_update',                      'Admin\HomeController@admin_home_slider_update');


        Route::get('/admin_home_bienvenidos',                       'Admin\HomeController@admin_home_bienvenidos');
        Route::post('/admin_home_bienvenidos_update_text',          'Admin\HomeController@admin_home_bienvenidos_update_text');
        Route::post('/admin_home_bienvenidos_update_image',         'Admin\HomeController@admin_home_bienvenidos_update_image');
        Route::post('/admin_home_footer_update',                    'Admin\HomeController@admin_home_footer_update');

        Route::get('/admin_ventajas',                            'Admin\HomeController@admin_ventajas');
        Route::post('/admin_ventajas_update',                     'Admin\HomeController@admin_ventajas_update');

        Route::get('/admin_nuestra_actividad',                  'Admin\HomeController@admin_nuestra_actividad');
        Route::get('/listData_NuestraActividad',                'Admin\HomeController@listData_NuestraActividad');
        Route::post('/editData_NuestraActividad',               'Admin\HomeController@editData_NuestraActividad');
        Route::post('/selectData_NuestraActividad',             'Admin\HomeController@selectData_NuestraActividad');


        Route::get('/admin_nuestro_estudio',         'Admin\HomeController@admin_nuestro_estudio');
        Route::get('/listarGaleriaDataTable',        'Admin\HomeController@listarGaleriaDataTable');
        Route::post('/createServicioGaleria',        'Admin\HomeController@createServicioGaleria');
        Route::post('/editServicioGaleria',          'Admin\HomeController@editServicioGaleria');
        Route::post('/editData_NuestroEstudio',      'Admin\HomeController@editData_NuestroEstudio');


        //::::::::::::::::::::::: ADMIN CONTROLLER QUIENES SOMOS ::::::::::::::::::::::::::
        Route::get('/admin_quienes_somos',             'Admin\QuienesSomosController@admin_quienes_somos');
        Route::post('/admin_quienes_somos_update',     'Admin\QuienesSomosController@admin_quienes_somos_update');

        //::::::::::::::::::::::: ADMIN CONTROLLER QUE HACEMOS ::::::::::::::::::::::::::
        Route::get('/admin_quehacemos',             'Admin\QueHacemosController@admin_quehacemos');
        Route::post('/admin_quehacemos_update',     'Admin\QueHacemosController@admin_quehacemos_update');

        //::::::::::::::::::::::: WEB CONTROLLER MEDICINA CELULAR ::::::::::::::::::::::::::
        Route::get('/admin_medicinacelular',             'Admin\MedicinaCelularController@admin_medicinacelular');
        Route::post('/admin_medicinacelular_update',     'Admin\MedicinaCelularController@admin_medicinacelular_update');

        //::::::::::::::::::::::: WEB CONTROLLER LA ALIANZA ::::::::::::::::::::::::::
        Route::get('/admin_alianza',                            'Admin\LaAlianzaController@admin_alianza');
        Route::post('/admin_alianza_update',                    'Admin\LaAlianzaController@admin_alianza_update');

        Route::get('/admin_mathias_rath',                       'Admin\LaAlianzaController@admin_mathias_rath');
        Route::post('/admin_mathias_rath_update',               'Admin\LaAlianzaController@admin_mathias_rath_update');

        Route::get('/admin_sustancias_vitales',                 'Admin\LaAlianzaController@admin_sustancias_vitales');
        Route::post('/admin_sustancias_vitales_update',         'Admin\LaAlianzaController@admin_sustancias_vitales_update');

        Route::get('/admin_productos_naturales',                'Admin\LaAlianzaController@admin_productos_naturales');
        Route::post('/admin_productos_naturales_update',        'Admin\LaAlianzaController@admin_productos_naturales_update');

        Route::get('/admin_formacion',                          'Admin\LaAlianzaController@admin_formacion');
        Route::post('/admin_formacion_update',                  'Admin\LaAlianzaController@admin_formacion_update');

        Route::get('/admin_grupo_barcelona',                    'Admin\LaAlianzaController@admin_grupo_barcelona');
        Route::post('/admin_grupo_barcelona_update',            'Admin\LaAlianzaController@admin_grupo_barcelona_update');

        //::::::::::::::::::::::: WEB CONTROLLER INVESTIGACION ::::::::::::::::::::::::::
        Route::get('/admin_investigacion',             'Admin\InsInvestigacionController@admin_investigacion');
        Route::post('/admin_investigacion_update',     'Admin\InsInvestigacionController@admin_investigacion_update');

        //::::::::::::::::::::::: WEB CONTROLLER FUNDACION ::::::::::::::::::::::::::
        Route::get('/admin_fundacion',             'Admin\FundacionController@admin_fundacion');
        Route::post('/admin_fundacion_update',     'Admin\FundacionController@admin_fundacion_update');

        //::::::::::::::::::::::: WEB CONTROLLER PUBLICACION ::::::::::::::::::::::::::
        Route::get('/admin_publicacion_internacional',                  'Admin\PublicacionesController@admin_publicacion_internacional');
        Route::post('/admin_publicacion_internacional_update',          'Admin\PublicacionesController@admin_publicacion_internacional_update');

        Route::get('/admin_saludnatural',                               'Admin\PublicacionesController@admin_saludnatural');
        Route::post('/admin_saludnatural_update',                       'Admin\PublicacionesController@admin_saludnatural_update');

        Route::get('/admin_informativos',                               'Admin\PublicacionesController@admin_informativos');
        Route::post('/admin_informativos_update',                       'Admin\PublicacionesController@admin_informativos_update');

        Route::get('/admin_revistas',                                   'Admin\PublicacionesController@admin_revistas');
        Route::post('/admin_revistas_update',                           'Admin\PublicacionesController@admin_revistas_update');

        Route::get('/admin_productos_saludables',                       'Admin\PublicacionesController@admin_productos_saludables');
        Route::post('/admin_productos_saludables_update',               'Admin\PublicacionesController@admin_productos_saludables_update');

        Route::get('/admin_investigaciones',                            'Admin\PublicacionesController@admin_investigaciones');
        Route::post('/admin_investigaciones_update',                    'Admin\PublicacionesController@admin_investigaciones_update');

        Route::get('/admin_libros',                                     'Admin\PublicacionesController@admin_libros');
        Route::post('/admin_libros_update',                             'Admin\PublicacionesController@admin_libros_update');

        Route::get('/admin_barletta',                                   'Admin\PublicacionesController@admin_barletta');
        Route::post('/admin_barletta_update',                           'Admin\PublicacionesController@admin_barletta_update');

        Route::get('/admin_boletines',                                  'Admin\PublicacionesController@admin_boletines');
        Route::post('/admin_boletines_update',                          'Admin\PublicacionesController@admin_boletines_update');

        //::::::::::::::::::::::: WEB CONTROLLER PROFESIONAL ::::::::::::::::::::::::::
        Route::get('/admin_profesional',                        'Admin\ProfesionalesController@admin_profesional');
        Route::post('/admin_profesional_update',                'Admin\ProfesionalesController@admin_profesional_update');



                //::::::::::::::::::::::: WEB CONTROLLER ACTIVIDAD ::::::::::::::::::::::::::
                Route::get('/admin_actividad',                          'Admin\ActividadesController@admin_actividad');//Inanctivo
                Route::post('/admin_actividad_update',                  'Admin\ActividadesController@admin_actividad_update');//Inanctivo
        
                Route::get('/admin_curso_basico',                          'Admin\ActividadesController@admin_curso_basico');
                Route::post('/admin_curso_basico_update',                  'Admin\ActividadesController@admin_curso_basico_update');


                
                Route::post('/admin_servicio_update',     'Admin\ServicioController@admin_servicio_update');
                Route::get('/listarDataTableInfo',          'Admin\ServicioController@listarDataTableInfo');












        //::::::::::::::::::::::: CONTROLLER SERVICIO ::::::::::::::::::::::::::
        Route::post('/changeServicioTraining',  'Admin\ServicioController@changeServicioTraining');
        Route::post('/saveServiciosTraining',   'Admin\ServicioController@saveServiciosTraining');
        Route::post('/imagenServiciosTraining', 'Admin\ServicioController@imagenServiciosTraining');

        //::::::::::::::::::::::: CONTROLLER SERVICIO: CRUD DE SERVICIOS ::::::::::::::::::::::::::
        Route::get('/adminServicioHello',       'Admin\ServicioController@adminServicioHello');
        Route::post('/createServicioTraining',  'Admin\ServicioController@createServicioTraining');
        Route::post('/editServicioTraining',    'Admin\ServicioController@editServicioTraining');
        Route::get('/listarDataTable',          'Admin\ServicioController@listarDataTable');

        //::::::::::::::::::::::: CONTROLLER SERVICIO: CRUD DE TITULO ::::::::::::::::::::::::::
        Route::get('/adminServicioTitulo',  'Admin\ServicioController@adminServicioTitulo');
        Route::get('/listarDataTableTitulo','Admin\ServicioController@listarDataTableTitulo');
        Route::post('/servicioGrabarTitulo','Admin\ServicioController@servicioGrabarTitulo');
        Route::post('/servicioEditarTitulo','Admin\ServicioController@servicioEditarTitulo');







                

    });



