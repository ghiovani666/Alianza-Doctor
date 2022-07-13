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



                <!--blog-section-->
                <section class="ttm-row blog-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-8 m-auto">
                        <!-- section-title -->
                        <div class="section-title with-sep title-style-center_text">
                            <div class="title-header">
                                <h5>OUR NEWS & BLOG</h5>
                                <h2 class="title">Publish What You Think</h2>
                            </div>
                            <div class="title-desc">Read & get educated & knowledge over versatile laboratory technology.We how else you can help patients without being a doctor.</div>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
                <!-- slick_slider -->
                <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows":false, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 2}} , {"breakpoint":525,"settings":{"slidesToShow": 1}}]}'>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/blog/blog-one-740x504.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>July 24 2109</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="blog-single.html">Equipping Researchers Lab in the Developing</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Clinical laboratory tests are taken up for the diagnosis, prevention and treatment of diseases and the branch of healthcare deals.</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/blog/blog-two-740x504.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>June 28 2019</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="blog-single.html">Learn: Blood bank operations and management</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Blood bank inventory management in India We study the current blood-banking scenario. Identify challenges that are peculiar to banks.</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/blog/blog-three-740x504.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>June 12 2019</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="blog-single.html">Do You Want To Fast Track your Lab Operations</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Given the extremely competitive environment; we understand the situation of pathologists and lab owners. So, fast track your operation.</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/blog/blog-four-740x504.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>May 30 2019</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="blog-single.html">Equipping Researchers Lab in the Developing</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Clinical laboratory tests are taken up for the diagnosis, prevention and treatment of diseases and the branch of healthcare deals.</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/blog/blog-five-740x504.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>April 16 2019</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="blog-single.html">Learn: Blood bank operations and management</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Blood bank inventory management in India We study the current blood-banking scenario. Identify challenges that are peculiar to banks.</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/blog/blog-six-740x504.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>April 20 2019</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="blog-single.html">Do You Want To Fast Track your Lab Operations</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Given the extremely competitive environment; we understand the situation of pathologists and lab owners. So, fast track your operation.</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-30 res-991-mt-30 text-center">
                            <strong>Don’t hesitate, contact us for better help and blog. <u><a href="#">Explore all latest News.</a></u></strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--blog-section end-->
        

            <section class="light_section section_padding_75" style="margin-top: 45px;">
                <div class="container">
                    @foreach($result as $key => $value)
                    <div class="row" style="margin-bottom: 45px;">
                        <div class="col-sm-12 text-center">
                            <h2 class="section_header grey"
                                style="color:{{$rowData_[2]->superior_titulo1_color}} !important;">{{ $key }}</h2>
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
                                <a href="viewServicioInfo/{{ $value_['id_descripcion'] }}"
                                    class="theme_button inverse">+ Info</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </section>





    </div>
</section>
<!--team-section end-->

@endsection

@section('footer_page')
<script>
$(".active_menu_2").addClass("active");
</script>
@endsection