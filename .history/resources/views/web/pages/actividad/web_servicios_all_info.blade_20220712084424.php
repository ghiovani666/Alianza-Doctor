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
                <!-- section-title -->
                <div class="section-title with-sep title-style-center_text">
                    <div class="col-lg-12">
                        <h4 class="title">{{$rowData[0]->info_titulo}} </h4>
                        <p> {{$rowData[0]->info_descripcion}} </p>
                    </div>
                    <div class="thumb">
                        <img class="w-100" src="{{$rowData[0]->info_url_image}}" alt="Image" />
                    </div>
                </div><!-- section-title end -->
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--team-section end-->

@endsection

@section('footer_page')
<script>
$(".active_menu_2").addClass("active");
</script>
@endsection