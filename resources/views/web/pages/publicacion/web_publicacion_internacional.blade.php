@extends('web.base')

<!-- Titulo de la página -->
@section('title_page')
<title>Alianza del Dr Rath para la Salud</title>
@endsection

<!-- Contenido en el Head de la pagina -->
@section('head_page')
<!-- extras -->
@endsection

<!-- Contenido en el Body -->
@section('content')

<section class="promo-section section section-on-bg" style="margin-bottom: 45px;">
    <!--//Menu de Opciones-->
    @include('web.partials.header.menu')
    <!--//Menu de Opciones-->
</section>

<!--team-section-->
<section class=" team-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ttm-tabs tabs-style-01">
                    <ul class="tabs d-md-flex portfolio-filter">
                        <li class="tab active"><a href="#" data-filter="*">Todos</a></li>
                        @if(count($nuestro_estudio_categoria)!=0)
                        @foreach ($nuestro_estudio_categoria as $values)
                        <li class="tab"><a href="#" data-filter="{{ $values->descripciones }}">{{$values->nombre  }}</a>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                    <div class="content-tab">
                        <!-- content-inner -->
                        <div class="row multi-columns-row ttm-boxes-spacing-15px isotope-project">

                            @if(count($nuestro_estudio)!=0)
                            @foreach ($nuestro_estudio as $values)
                            <div
                                class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6 {{ substr($values->descripciones,1)  }} anestheslology">
                                <div class="featured-imagebox featured-imagebox-portfolio ttm-portfolio-box-view1">
                                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                        <div class="featured-thumbnail">
                                            <a href="javascript:void(0)"
                                                onClick="webRedireccionA({{ $values->id_estudio }})"> <img
                                                    class="img-fluid" src="{{ $values->url_image }}" alt="image"></a>
                                        </div>
                                        <div class="featured-iconbox ttm-media-link">
                                            <a class="ttm_prettyphoto ttm_image" title="Rehabilitation Center"
                                                data-rel="prettyPhoto" href="{{ $values->url_image }}">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                onClick="webRedireccionA({{ $values->id_estudio }})" class="ttm_link"><i
                                                    class="ti ti-link"></i></a>
                                        </div>
                                        <div class="ttm-box-view-content-inner">
                                            <div class="featured-content featured-content-portfolio">
                                                <div class="featured-title">
                                                    <h5><a href="javascript:void(0)"
                                                            onClick="webRedireccionA({{ $values->id_estudio }})">{{ $values->titulo }}</a>
                                                    </h5>
                                                </div>
                                                <span class="category" style="text-align: justify;">{{ $values->descripcion }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--team-section end-->


<style type="text/css">
        .featured-imagebox-portfolio.ttm-portfolio-box-view1 img {
            object-fit: contain;
            width: 100%;
            height: 22rem;
            transition: all 0.6s ease 0s;
        }

        .hs-responsive-embed-youtube {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
        padding-top: 25px;
        }
        .hs-responsive-embed-youtube iframe {
        position: absolute;
        width: 100%!important;
        height: 100%!important;
        }
 
        </style>

@endsection

@section('footer_page')
<script>

     // :::::::::::::::::::::::::::::: REGISTRAR LOGIN  ::::::::::::::::::::::::::::::::::::::::
     function webRedireccionA(id_estudio) {
            axios.get('linkActividad/'+id_estudio).then(function(response) {
            if (response.data.state == "error") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: response.data.data,
                })
            } else if (response.data.state == "login") {
                $('#modalRegistrarFavorito').modal('show')
            } else {
                    window.location ='linkActividad/'+id_estudio
            }
                }).catch(function() {
            console.log('FAILURE!!');
            });
        }

        
$(".active_menu_2").addClass("active");
</script>
@endsection