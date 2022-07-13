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



    <section class="light_section section_padding_75" style="margin-top: 45px;">
        <div class="container">
        
        </div>
    </section>
    <!--== End Contact Area ==-->
    <section class="light_section section_padding_75" style="margin-top: 45px;margin-bottom: 45px;text-align: center;">
        <div class="container">

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