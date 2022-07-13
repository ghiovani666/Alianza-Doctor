        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
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
                                        <a href="/web_quienes_somos" class="mega-menu-link">Quíenes Somos</a>
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
                                        <li><a class="tooltip-bottom" target="_blank"
                                                href="https://www.facebook.com/Fundaci%C3%B3n-Dr-Rath-para-la-Salud-378987682136616/"
                                                data-tooltip="Facebook" tabindex="-1"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a class="tooltip-bottom" target="_blank"
                                                href="https://twitter.com/search?q=%40RathproSaludES&src=typd"
                                                data-tooltip="Twitter" tabindex="-1"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a class="tooltip-bottom" target="_blank"
                                                href="https://www.youtube.com/channel/UCoi3i-rRidFBTc7JLjA5ung"
                                                data-tooltip="Flickr" tabindex="-1"><i class="fa fa-google"></i></a>
                                        </li>

                                        <?php if (Auth::check()) { ?>
                                        <li class="mega-menu-item " style="margin-left: 15px;">
                                            <a href="/logout" class="tooltip-bottom" data-tooltip="Cerrar Session"
                                                style="color: white !important;"><i class="fa fa-close"
                                                    style="margin-right: 5px;"></i>Cerrar Session</a>
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

                                    <?php $data = DB::table('web_footer as md')->where('md.id_footer',1)->get();?>

                                    <div class="site-branding mr-auto">
                                        <a class="home-link" href="/" title="Alianza del Dr Rath para la Salud"
                                            rel="home">
                                            <img id="logo-img" class="img-center" src="{{$data[0]->url_image}}"
                                                alt="logo-img" style="margin-bottom: 15px;">
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
                                                    <li><a href="/web_publicacion_internacional">Dr. Rath
                                                            Internacional</a></li>
                                                    <li><a href="/web_saludnatural">Folletos para la Salud Natural</a>
                                                    </li>
                                                    <li><a href="/web_informativos">Boletines Informativos</a></li>
                                                    <li><a href="/web_revistas">Revistas</a></li>
                                                    <li><a href="/web_productos_saludables">Productos Saludables</a>
                                                    </li>
                                                    <li><a href="/web_investigaciones">Investigaciones</a></li>
                                                    <li><a href="/web_barletta">Libros</a></li>
                                                    <li><a href="/web_boletines">Declaración Barletta</a></li>
                                                    <!-- <li><a href="/web_libros">Boletines</a></li> -->
                                                </ul>

                                            </li>
                                            <li class="mega-menu-item active_menu_4">
                                                <!-- <a href="/web_actividad" class="mega-menu-link">Actividades</a> -->
                                                <a href="javascript:void(0)" class="mega-menu-link">Actividades</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="/web_curso_basico">Curso básico online</a>
                                                    </li>
                                                    <li><a href="/web_charlas/1">Charlas informativas</a></li>
                                                    <li><a href="/web_charlas/2">Cursos y talleres</a></li>
                                                    <li><a href="/web_charlas/3">Talleres Escolares</a></li>
                                                </ul>

                                            </li>
                                            <li class="mega-menu-item active_menu_4">
                                                <a href="https://alianzadrrath.org/blog/"
                                                    class="mega-menu-link">Blog</a>
                                            </li>
                                            <li class="mega-menu-item active_menu_5">
                                                <a href="/web_profesional" class="mega-menu-link">Profesionales</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- site-header-menu end-->
        </header>
        <!--header end-->