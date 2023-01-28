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
    <!--site-main start-->
    <div class="site-main">
        <?php $bookings = DB::table('web_blog')->get();?>

        <div class="ttm-row sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 content-area">


                    @foreach($bookings as $booking)

                        <!-- post -->
                        <article class="post ttm-blog-classic clearfix">


                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="{{ $booking->url_image }}" alt="">
                                </div>
                            </div>

                            <div class="ttm-blog-classic-content">

                                <div class="ttm-post-entry-header">
                                    <div class="post-meta">
                                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>By Admin</span>
                                        <span class="ttm-meta-line tags-links"><i class="fa fa-comment"></i>45 Comments</span>
                                        <span class="ttm-meta-line entry-date"><i class="fa fa-calendar"></i><time class="entry-date published" datetime="2018-07-28T00:39:29+00:00">July 28, 2018</time></span>
                                    </div>
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="blog-single.html">Ways To Tell Youre Suffering To From An Skion</a></h2>
                                    </header>
                                </div>

                                <div class="entry-content" style="text-align: justify;">
                                    <div class="ttm-box-desc-text">
                                        <p>{{ $booking->descripcion }}</p>
                                    </div>
                                    <div class="ttm-blogbox-desc-footer">
                                        <div class="ttm-blogbox-footer-readmore">
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-skincolor" href="#">Read More!</a>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- ttm-blog-classic-content end -->
                        </article><!-- post end -->

                        @endforeach
                        
                        <div class="pagination-block">
                            <span class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 widget-area sidebar-right">
 
 
                        <aside class="widget widget-archive with-title">
                            <h3 class="widget-title">Publicaciones</h3>
                            <ul>
                                <li><a href="#">January  (18)</a></li>
                                <li><a href="#">February  (31)</a></li>
                                <li><a href="#">March  (22)</a></li>
                                <li><a href="#">April  (16)</a></li>
                                <li><a href="#">May  (07)</a></li>
                                <li><a href="#">June  (37)</a></li>
                            </ul>
                        </aside>
                        <aside class="widget tagcloud-widget with-title">
                            <h3 class="widget-title">Populares Tags</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">Laboratorio</a>
                                <a href="#" class="tag-cloud-link">Wet lab</a>
                                <a href="#" class="tag-cloud-link">Reagent bottle</a>
                                <a href="#" class="tag-cloud-link">Gemological</a>
                                <a href="#" class="tag-cloud-link">Laboratory safety</a>
                                <a href="#" class="tag-cloud-link">equipment‎</a>
                                <a href="#" class="tag-cloud-link">Biochemistry research</a>
                                <a href="#" class="tag-cloud-link">Commercial</a>
                            </div>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>


    </div><!--site-main end-->
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