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
        <!-- section-title -->
        <div class="myIframe">
            <iframe src="http://sosbiologiacelularytisular.blogspot.com/"></iframe>
        </div>
    </div>
</section>
<!--team-section end-->
<!-- https://stackoverflow.com/questions/17838607/making-an-iframe-responsive -->
<style type="text/css">
.myIframe {
    position: relative;
    padding-bottom: 65.25%;
    padding-top: 30px;
    height: 0;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    /*<<--- THIS IS THE KEY*/
    /* border: solid black 1px; */
}

.myIframe iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>

@endsection

@section('footer_page')
<script>
$(".active_menu_2").addClass("active");
</script>
@endsection