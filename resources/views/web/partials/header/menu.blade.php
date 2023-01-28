        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <?php $data = DB::table('web_footer as md')->where('md.id_footer',1)->get();?>

            <!-- top_bar -->
            <div class="top_bar ttm-bgcolor-skincolor clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 d-flex flex-row align-items-center">

                            <!-- menu -->
                            <nav class="main-menu menu-mobile" id="menu">
                                <ul class="menu">
                                    <li class="mega-menu-item ">
                                        <a href="/" class="mega-menu-link">Inicio</a>
                                    </li>
                                    <li class="mega-menu-item ">
                                        <a href="/web_quienes_somos" class="mega-menu-link">Quiénes Somos</a>
                                    </li>
                                    <li class="mega-menu-item ">
                                        <a href="/web_quehacemos" class="mega-menu-link">Qué hacemos</a>
                                    </li>
                                    <li class="mega-menu-item ">
                                        <a href="/web_medicinacelular" class="mega-menu-link">Medicina Celular</a>
                                    </li>
                                    <li class="mega-menu-item ">
                                        <a href="/web_contacto" class="mega-menu-link">Contacto</a>
                                    </li>
                                </ul>
                            </nav>

                            <div class="top_bar_contact_item" style="margin-left: 20%;">
                                <div class="top_bar_social">
                                    <ul class="social-icons">
                                        <li><a class="tooltip-bottom" target="_blank"  href="{{ $data[0]->red_social_instagram }}"
                                                data-tooltip="instagram" tabindex="-1"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li><a class="tooltip-bottom" target="_blank" href="{{ $data[0]->red_social_youtobe }}"
                                                data-tooltip="youtube" tabindex="-1"><i class="fa fa-youtube"></i></a>
                                        </li>

                                        <?php if (Auth::check()) { ?>
                                        <li class="mega-menu-item " style="margin-left: 15px;margin-right: 5px;">
                                            <a href="/logout" class="tooltip-bottom" data-tooltip="Cerrar Session" style="color: white !important;"><i class="fa fa-close" style="margin-right: 5px;"></i>Cerrar Session</a>
   
                                        </li>
                                        <li>
                                            <a class="tooltip-bottom"  href="/admin/index"  data-tooltip="Administrador" style="color: white !important;" tabindex="-1"><i class="fa fa-user" style="margin-right: 5px;"></i>Panel</a>
                                        </li>
                                        <?php } else { ?>
                                        <li class="mega-menu-item " style="margin-left: 15px;">
                                            <a href="/admin/index" class="tooltip-bottom" data-tooltip="Login"
                                                style="color: white !important;"><i class="fa fa-user"
                                                    style="margin-right: 5px;"></i>Login</a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- top_bar end-->
            <!-- site-header-menu -->
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="">
                        <div class="">
                            <div class="col">
                                <!--site-navigation -->
                                <div class="site-navigation d-flex flex-row">

                                    

                                    <div class="site-branding mr-auto">
                                        <a class="home-link" href="/" title="Alianza del Dr Rath para la Salud" rel="home">
                                            <img id="logo-img" class="img-center" src="{{$data[0]->url_image}}" alt="logo-img" style="margin-bottom: 15px;">
                                        </a>
                                    </div>
                                    <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                        <span class="menubar-box">
                                            <span class="menubar-inner"></span>
                                        </span>
                                    </div>
                                    <!-- menu -->
                                    <nav class="main-menu menu-mobile" id="menu">
                                        <ul class="menu">

                                            <li class="mega-menu-item active_menu_3">
                                                <a href="javascript:void(0)" class="mega-menu-link">La Alianza</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="/web_alianza">La Alianza</a></li>
                                                    <li><a href="/web_mathias_rath">Dr. Mathias Rath</a></li>
                                                    <li><a href="/web_sustancias_vitales">Sustancias Vitales</a></li>
                                                    <li><a href="/web_productos_naturales">Productos Naturales</a></li>
                                                    <li><a href="/web_formacion">Formación</a></li>
                                                    <li><a href="/web_grupo_barcelona">Actívate - Grupo activo
                                                            Barcelona</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-item active_menu_4">
                                                <a href="/web_investigacion" class="mega-menu-link">Inst. de
                                                    Investigación</a>
                                            </li>
                                            <li class="mega-menu-item active_menu_4">
                                                <a href="/web_fundacion" class="mega-menu-link">Fundación</a>
                                            </li>
                                            <li class="mega-menu-item active_menu_4">
                                                <a href="javascript:void(0)" class="mega-menu-link">Publicaciones</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="javascript:void(0)" onClick="webRedireccionx('web_publicacion_internacional')">Dr. RathInte rnacional</a></li>
                                                    <li><a href="javascript:void(0)" onClick="webRedireccionx('web_saludnatural')">Folletos para la Salud Natural</a></li>
                                                    <li><a href="javascript:void(0)" onClick="webRedireccionx('web_informativos')">Boletines Informativos</a></li>
                                                    <li><a href="javascript:void(0)" onClick="webRedireccionx('web_revistas')">Revistas</a></li>
                                                    <li><a href="javascript:void(0)" onClick="webRedireccionx('web_productos_saludables')">Productos Saludables</a></li>
                                                    <li><a href="javascript:void(0)" onClick="webRedireccionx('web_investigaciones')" >Investigación</a></li>
                                                    <li><a href="javascript:void(0)" onClick="webRedireccionx('web_barletta')">Libros</a></li>
                                                    <li><a href="javascript:void(0)" onClick="webRedireccionx('web_boletines')">Declaración Barletta</a></li>
                                                </ul>

                                            </li>
                                            <li class="mega-menu-item active_menu_4">
                                                <!-- <a href="/web_actividad" class="mega-menu-link">Actividades</a> -->
                                                <a href="javascript:void(0)" class="mega-menu-link">Actividades</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="/web_curso_basico">Curso básico online</a>
                                                    </li>
                                                    <li><a href="/web_servicios_all/1">Cursos</a></li>
                                                    <li><a href="/web_servicios_all/2">Cursos y talleres</a></li>
                                                    <!-- <li><a href="/web_servicios_all/3">Talleres Escolares</a></li> -->
                                                </ul>

                                            </li>
                                            <li class="mega-menu-item active_menu_4">
                                                <a href="/web_blog" class="mega-menu-link">Blog</a>
                                            </li>
                                            <li class="mega-menu-item active_menu_5">
                                                <a href="/web_profesional" class="mega-menu-link">Profesionales</a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                        <div class="header_search">
                                            <a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
                                            <div class="header_search_content" style="background: #535aa2;">
                                                <form id="searchbox" method="get" action="#">
                                                    <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Buscar" value="">
                                                    <button type="submit" class="btn close-search"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- site-header-menu end-->


             <!-- Modal Registrar Usuario  -->
             <div class="modal fade" id="modalRegistrarFavorito" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="border: unset !important;">
                            <div class="alert" role="alert" style="display: flex;background: #535aa2;color: white;"> @include('web.partials.header.ajax.icon_check')<label for="" style="padding-left: 12px;font-size: 16px;color: white;">Registrar Usuario</label>
                            </div>
                            <div class="modal-body">

                                <form id="submitRegistrar">

                                    <div class="col-sm-12">

                                        <div class="panel panel-default">
                                           
                                            <div class="panel-body">

                                                <div class="required"> <label for="txt_nombrex">Nombre y Apellido  <sup>*</sup></label>
                                                    <input type="text" style="border: 1px solid #535aa2;" class="text form-control" name="txt_nombrex" id="txt_nombrex" autocomplete="unInput" required>
                                                </div>

                                                <div style="margin-top: 5px;"> <label for="txt_emailx">Email  <sup>*</sup></label>
                                                    <input type="email" style="border: 1px solid #535aa2;" class="text form-control" name="txt_emailx" id="txt_emailx" autocomplete="off" required>
                                                </div>

                                                <div style="margin-top: 5px;"> <label for="txt_password">Contraseña  <sup>*</sup></label>
                                                    <input type="password" style="border: 1px solid #535aa2;" class="text form-control" name="txt_password" id="txt_password" autocomplete="new-password" placeholder="Contraseña de 9 caracteres"  required>
                                                </div>

                                                <div style="margin-top: 5px;"> <label for="txt_telefono_movil">Teléfono móvil <sup>*</sup></label>
                                                    <input type="text" style="border: 1px solid #535aa2;" class="text form-control" name="txt_telefono_movil" id="txt_telefono_movil" required>
                                                </div>

                                                <div style="margin-top: 15px;">
                                                    <label for="invoice_address" style="display: flex;">
                                                        <div style="margin-right: 10px;" id="uniform-invoice_address"><span>
                                                                <input type="checkbox" name="txt_terminos"  id="txt_terminos" autocomplete="off" required></span>
                                                        </div>
                                                        <p><a href="javascript:void(0)" onclick="openModalTerminos()">Acepto la política de los terminos y condiciones</a></p>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                
                                    </div>

                                    <div class="modal-footer" style="display: grid;">
                                        <button type="submit" class="btn" id="btn_sumit"
                                            style="background: #535aa2;color: white;">Registrar</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
                <?php 
                    $Terminos =  DB::table('web_terminos')->where("id_terminos", 6)->get(); 
                ?>

                <!-- Modal Terminos y Condiciones -->
                <div class="modal fade" id="modalOpenTerminos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="rte">
                                    {!! (count($Terminos)!=0?$Terminos[0]->terminos:'') !!}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

        </header>
        <!--header end-->

        
@push('scripts')

<script type="text/javascript">

// :::::::::::::::::::::::::::::: REGISTRAR LOGIN  ::::::::::::::::::::::::::::::::::::::::
function webRedireccionx(url_string) {
 
     axios.get(url_string).then(function(response) {
        if (response.data.state == "error") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: response.data.data,
            })
        } else if (response.data.state == "login") {
            $('#modalRegistrarFavorito').modal('show')
        } else {
                window.location ='/'+url_string
        }
           }).catch(function() {
        console.log('FAILURE!!');
    });
 }


 $('#submitRegistrar').on('submit', function(e) {
    e.preventDefault();

    const txt_nombre = $("input[name=txt_nombrex]").val();
    const txt_email = $("input[name=txt_emailx]").val();
    const txt_password = $("input[name=txt_password]").val();
    const txt_telefono_movil = $("input[name=txt_telefono_movil]").val();
    const txt_terminos = ($('#txt_terminos').is(":checked")) ? 1 : 0;

    const formData = new FormData(this);

    formData.append('txt_nombre', txt_nombre)
    formData.append('txt_email', txt_email)
    formData.append('txt_password', txt_password)
    formData.append('txt_telefono_movil', txt_telefono_movil)

    formData.append('txt_terminos_condiciciones', txt_terminos)

    axios.post('web_registe_user',
        formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }
    ).then(function(response) {

        if (response.data.state == "ok") {

            Swal.fire({
                icon: 'success',
                title: 'Good job!',
                text: response.data.data,
                confirmButtonText: 'ok',
                allowOutsideClick: false,
                allowEscapeKey: false
            }).then((result) => {

                if (result.value) {
                    window.location.reload(1);
                }
            })

        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: response.data.data,
            })
        }

    }).catch(function() {
        console.log('FAILURE!!');
    });

});

function openModalTerminos() {
    $('#modalOpenTerminos').modal(true)
}

</script>
@endpush
