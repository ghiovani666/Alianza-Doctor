    <!--footer start-->
    <footer class="footer widget-footer clearfix">

        <div class="third-footer" style="background: #535aa2;color: white;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 widget-area">
                        <div class="widget widget_text clearfix">

                            <?php $data = DB::table('web_footer as md')->where('md.id_footer',1)->get();?>
                            <div class="footer-logo">
                                <img id="footer-logo-img" style="max-height: 100px" class="img-center"
                                    src="template_web/assets/images/logo/logo_footer.png" alt="">
                            </div>
                            <div class="textwidget widget-text">
                                <p class="pb-10 pr-30" style="line-height: 20px;color: rgb(255 255 255);font-size: 15px;text-align: justify;">{{ $data[0]->descripcion }}</p>
                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-skincolor"
                                    href="#" title="">Leer Más!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title" style="color: #ffffff;">Nuestro enlaces</h3>
                            <ul id="menu-footer-quick-links" style="color: #ffffff;">
                                <li><a href="#" style="color: #ffffff;">Inicio</a></li>
                                <li><a href="#" style="color: #ffffff;">Quienes Somos</a></li>
                                <li><a href="#" style="color: #ffffff;">Información</a></li>
                                <li><a href="#" style="color: #ffffff;">Blog</a></li>
                                <li><a href="#" style="color: #ffffff;">Contacto</a></li>
                                <li><a href="#" style="color: #ffffff;">Medicina Celular</a></li>
                                <li><a href="#" style="color: #ffffff;">Calendario</a></li>
                                <li><a href="#" style="color: #ffffff;">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                        <div class="widget style2 widget-out-link clearfix">
                            <h3 class="widget-title" style="color: #ffffff;">Contacto</h3>
                            <ul class="widget-post ">
                                <li>
                                    <span class="post-date"><i class="fa fa-map"></i> <a href="#!"
                                            style="color: #ffffff;">{{ $data[0]->web }}</a></span>

                                </li>
                                <li>
                                    <span class="post-date"><i class="fa fa-map"></i> <a href="#!"
                                            style="color: #ffffff;">{{ $data[0]->direccion }}</a></span>

                                </li>
                                <li>
                                    <span class="post-date"><i class="fa fa-map"></i> <a href="#!"
                                            style="color: #ffffff;">{{ $data[0]->telefono }}</a></span>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text">
            <div class="container">
                <div class="row copyright">
                    <div class="col-sm-9">
                        <span>Copyright © 2023 Alianza del Dr Rath para la Salud Theme by <a
                                href="http://www.alianzadrrath.org/">ThemetechMount</a></span>
                    </div>
                    <div class="col-sm-3">
                        <div class="d-flex flex-row align-items-center justify-content-end social-icons">
                            <ul class="social-icons list-inline">
                                <li class="social-instagram"><a class="tooltip-top" target="_blank"
                                        href="{{ $data[0]->red_social_facebook }}" data-tooltip="instagram"><i
                                            class="ti ti-instagram"></i></a></li>
                               
                                <li class="social-youtube"><a class="tooltip-top" target="_blank"
                                        href="{{ $data[0]->red_social_tweter }}" data-tooltip="youtube"><i
                                            class="ti ti-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->