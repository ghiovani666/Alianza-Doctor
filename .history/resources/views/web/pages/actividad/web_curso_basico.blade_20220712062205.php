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
      
        




        <main class="main-content">
    <?php  
        $footer_ = DB::table('web_footer')->where('id_footer', '=',1)->get();
    ?>

    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="{{$rowData_[2]->superior_url_image}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content content-style2">
                        <h2 class="title"><span style="color:{{$rowData_[2]->superior_titulo1_color}} !important;">{{$rowData_[2]->superior_titulo1}}</span></h2>
                        <div class="desc">
                            <p class="ml-0">{{$rowData_[2]->superior_titulo2}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Slasses Area ==-->
    <section class="divider-area classes-divider-area" style="margin-bottom: 85px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-5">
                    <div class="divider-content">
                        <h2 class="title" style="color:{{$rowData_[2]->superior_titulo1_color}} !important;">{{$rowData_[2]->inferior_titulo}}</h2>
                        <p>{{$rowData_[2]->inferior_descripcion}}</p>
                    </div>
                </div>
                <div class="col-md-6 offset-lg-0 col-xl-6 offset-xl-1">
                    <div class="thumb">
                        <span class="shape-border"></span>
                        <img src="{{$rowData_[2]->inferior_url_image}}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Slasses Area ==-->
    <!--== Start Contact Area ==-->

    <section class="light_section section_padding_75" style="margin-top: 45px;">
        <div class="container">
            @foreach($result as $key => $value)
                <div class="row" style="margin-bottom: 45px;">
                    <div class="col-sm-12 text-center">
                        <h2 class="section_header grey" style="color:{{$rowData_[2]->superior_titulo1_color}} !important;">{{ $key }}</h2>
                    </div>
                </div>
                <div class="row">
                @foreach($value as $key_ => $value_)
                    <div class="col-sm-4 to_animate animated fadeInUp">
                        <div class="teaser text-center">
                            <div class="teaser_icon size_normal">
                                <img src="{{ $value_['url_image'] }}" alt="Image" style="height: 100px;">
                            </div>
                            <h3>{{ $value_["title"] }}</h3>
                            <p>{{ $value_["descripcion"] }}</p>
                            <a href="viewServicioInfo/{{ $value_['id_descripcion'] }}" class="theme_button inverse">+ Info</a>
                        </div>
                    </div>
                @endforeach
                </div>
            @endforeach
        </div>
    </section>
    <!--== End Contact Area ==-->
    <section class="light_section section_padding_75" style="margin-top: 45px;margin-bottom: 45px;text-align: center;">
        <div class="container">
            <h2 class="title" style="color:{{$rowData_[2]->superior_titulo1_color}} !important;">Si te interesa este servicio contacta con nosotros ahora</h2>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group m-0">
                        <button class="btn btn-theme" type="button"><a href="viewContacto"
                                style="color: white">CONTACTO</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>










    </div>
</section>
<!--team-section end-->

@endsection

@section('footer_page')
<script>
$(".active_menu_2").addClass("active");
</script>
@endsection