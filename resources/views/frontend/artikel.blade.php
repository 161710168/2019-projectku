<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>KEYS'AUDIO</title>

    <!--=== Bootstrap CSS ===-->
    <link href="{{asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--=== Animate CSS ===-->
    <link href="{{asset ('assets/css/plugins/animate.css') }}" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="{{asset ('assets/css/plugins/vegas.min.css') }}" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="{{asset ('assets/css/plugins/slicknav.min.css') }}" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{asset ('assets/css/plugins/magnific-popup.css') }}" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{asset ('assets/css/plugins/owl.carousel.min.css') }}" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{asset ('assets/css/plugins/gijgo.css') }}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{asset ('assets/css/font-awesome.css') }}" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{asset ('assets/css/reset.css') }}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{asset ('assets/css/responsive.css') }}" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="/gambar/home/home.png">
</head>

<body class="loader-active">

<!--== Preloader Area Start ==-->
<div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="{{asset ('assets/img/preloader.gif')}}" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

<!--== Header Area Start ==-->
<header id="header-area" class="fixed-top">
    <!--== Header Top Start ==-->
    <div id="header-top" class="d-none d-xl-block">
        <div class="container">
            <div class="row">
                <!--== Single HeaderTop Start ==-->
                <div class="col-lg-3 text-left">
                    <i class="fa fa-map-marker"></i> 802/2, Mirpur, Dhaka
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
                <div class="col-lg-3 text-center">
                    <i class="fa fa-mobile"></i> +1 800 345 678
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
                <div class="col-lg-3 text-center">
                    <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Social Icons Start ==-->
                <div class="col-lg-3 text-right">
                    <div class="header-social-icons">
                        <a href="#"><i class="fa fa-behance"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <!--== Social Icons End ==-->
            </div>
        </div>
    </div>
    <!--== Header Top End ==-->

    <!--== Header Bottom Start ==-->
    <div id="header-bottom">
        <div class="container">
            <div class="row">

                <!--== Main Menu Start ==-->
                
                <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                                <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/about">Tentang</a></li>
                                        <li><a href="/produk">produk</a></li>
                                        <li><a href="/galeri">Galeri</a></li>
                                        <li><a href="/art">Blog</a></li>
                                        <li><a href="/test">Testimoni</a></li>
                                        <li><a href="/kontak">Kontak</a></li>
                                        
                                    </ul>
                        </nav>
                    </div>
                <!--== Main Menu End ==-->
            </div>
        </div>
    </div>
    <!--== Header Bottom End ==-->
</header>
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Artikel</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    @php
$artikels =App\artikels::all();
@endphp
    
<div id="blog-page-content" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Single Articles Start -->
                @foreach($artikels as $data)
                @if($data->id % 2)
                <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                        <img src="{{ asset ('assets/img/artikel/' .$data->gambar. '' ) }}" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                                <h3><a href="article-details.html">{{$data->judul}}</a></h3>
                                                <div class="article-meta">
                                                    <a href="#" class="author">JUDUL <span></span></a>
                                                    <a href="#" class="commnet"> <span>{{ $data->kategoriartikels->nama_kategori }}</span></a>
                                                </div>
    
                                                <div class="date_comment">
                                                        <a href="#"><i class="fa fa-calender" aria-hidden="true"></i>{{ $data->created_at->diffForHumans() }}</a>
                                                        </div>
                                                        <p>{!!str_limit($data->deskripsi,100)!!}.....
                                                                <br>
                                                            </p>
                                                            <a href="/artikels/single/{{$data->slug}}" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a></p> 
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->

                <!-- Single Articles Start -->
                @else
                <div class="col-lg-12">
                    <article class="single-article middle">
                        <div class="row">   

                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5 d-xl-none">
                                <div class="article-thumb">
                                    <img src="{{ asset ('assets/img/artikel/' .$data->gambar. '' ) }}" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                        <h3><a href="article-details.html">{{$data->judul}}</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">JUDUL <span></span></a>
                                                <a href="#" class="commnet"> <span>{{ $data->kategoriartikels->nama_kategori }}</span></a>
                                            </div>

                                            <div class="date_comment">
                                                    <a href="#"><i class="fa fa-calender" aria-hidden="true"></i>{{ $data->created_at->diffForHumans() }}</a>
                                                    </div>
                                                    <p>{!!str_limit($data->deskripsi,100)!!}.....
                                                            <br>
                                                        </p>
                                                        <a href="/artikels/single/{{$data->slug}}" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->

                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5 d-none d-xl-block">
                                <div class="article-thumb">
                                    <img src="{{ asset ('assets/img/artikel/' .$data->gambar. '' ) }}" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->
                        </div>
                    </article>
                </div>
                @endif
                @endforeach
                <!-- Single Articles End -->
            </div>
        </div>
    </div>
    
    
    
    <script src="{{asset ('assets/js/jquery-3.2.1.min.js') }}"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="{{asset ('assets/js/jquery-migrate.min.js') }}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{asset ('assets/js/popper.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{asset ('assets/js/bootstrap.min.js') }}"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="{{asset ('assets/js/plugins/gijgo.js') }}"></script>
    <!--=== Vegas Min Js ===-->
    <script src="{{asset ('assets/js/plugins/vegas.min.js') }}"></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{asset ('assets/js/plugins/isotope.min.js') }}"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="{{asset ('assets/js/plugins/owl.carousel.min.js') }}"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="{{asset ('assets/js/plugins/waypoints.min.js') }}"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="{{asset ('assets/js/plugins/counterup.min.js') }}"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="{{asset ('assets/js/plugins/mb.YTPlayer.js') }}"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="{{asset ('assets/js/plugins/magnific-popup.min.js') }}"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="{{asset ('assets/js/plugins/slicknav.min.js') }}"></script>

    <!--=== Mian Js ===-->
    <script src="{{asset ('assets/js/main.js') }}"></script>
</body>
