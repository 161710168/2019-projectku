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

<!--== Mobile App Area Start ==-->
<div id="mobileapp-video-bg"></div>
<section id="slideslow-bg">
         <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell">
                                    <h1>SELAMAT DATANG</h1>
                                    <p>Di WEBSITE  KEY'S AUDIO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
         </div>
</section>
<!--== Mobile App Area End ==-->
<!--== Header Area End ==-->


  @php
$galeris =App\galeris::all();
@endphp
   <!--== Page Title Area Start ==-->
   <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Galeri</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Gallery Page Content Start ==-->
    <section id="gallery-page-content" class="section-padding">
        <div class="container">
        	<div class="row">
        		<div class="col-lg-12">
					<div class="popular-cars-wrap">
                        <div class="popucar-menu text-center">
							<a href="{{url('/index')}}" data-filter="*" class="active">all</a>
                            
						</div>
						<div class="row popular-car-gird">
                            <!-- Single Popular Car Start -->
                            @foreach($galeris as $data)
							<div class="col-lg-4 col-md-6 con suv mpv">
								<div class="single-popular-car">
									<div class="p-car-thumbnails">
										<a class="car-hover"  href="{{ asset ('assets/img/galeri/' .$data->gambar. '' ) }}">
                                        <img src="{{ asset ('assets/img/galeri/' .$data->gambar. '' ) }}"  width=”50″ heigth=”60″></div><br>
									   </a>
									</div>
                                    <div class="p-car-content">
								</div>
							</div>
							<!-- Single Popular Car End -->

							@endforeach
						</div>
        			</div>
        		</div>
        	</div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->


 <!--== Page Title Area Start ==-->
 <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Produk</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Gallery Page Content Start ==-->
    @php
$barangs =App\barangs::all();
$kategoris =App\kategoris::all();
@endphp
<section id="gallery-page-content" class="section-padding">
        <div class="container">
        	<div class="row">
        		<div class="col-lg-12">
					<div class="popular-cars-wrap">
						<!-- Filtering Menu -->
						<div class="popucar-menu text-center">
                            <a href="{{url('/produk')}}" data-filter="*" class="active">all</a>
                            @foreach($kategoris as $data)
                            <a href="{{url('/barang_kategori',$data->id)}}" data-filter=".barangs{{$data->id}}">{{$data->nama_kategori}}</a>
                            @endforeach

						</div>
						<!-- Filtering Menu -->
       			 
						<div class="row popular-car-gird">
                            <!-- Single Popular Car Start -->
                            @foreach($barangs as $data)
							<div class="col-lg-4 col-md-6 con suv mpv barangs{{$data->kategoris->id}}">
								<div class="single-popular-car ">
                                
									<div class="p-car-thumbnails">
                                    <a class="car-hover" href="{{ asset ('assets/img/galeri/' .$data->gambar. '' ) }}">
										  <img src="{{ asset ('assets/img/barang/' .$data->gambar. '' ) }}" alt="IMG-GALLERY">
									   </a>
									</div>
									  <div class="p-car-content">
								            
                                            <h3>
                                                {{$data->nama_barang}}
                                                <span class="price"><i class="fa fa-tag"></i>Rp.{{$data->harga}}</span>
                                            </h3>

                                            
                                            <h5>{!!str_limit($data->deskripsi,100)!!}.. </h5>
                                            <a href="/produks/singleproduk/{{$data->slug}}" class="single-blog-item">Detail</a></p></div>
                                        </div>            
                                </div>
                                @endforeach
                            </div>
							<!-- Single Popular Car End -->
                          
						</div>
        			</div>
        		</div>
        	</div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->


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
                <div class="col-lg-12">
                    <article class="single-article">
                    @foreach($artikels as $data)
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
                                        <h3><a href="/artikels/single/{{$data->slug}}">{{ $data->judul}}</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Admin</span></a>
                                                <a href="#" class="commnet"> <span>{{ $data->kategoriartikels->nama_kategori }}</span></a>
                                            </div>
                                                

                                            <div class="date_comment">
                                                <a href="#"><i class="fa fa-calender" aria-hidden="true"></i>{{ $data->created_at->diffForHumans() }}</a>
                                                </div>
                                                <p>{!!str_limit($data->deskripsi,100)!!}.....
                                                    <br>
                                                </p>
                                                <a href="/artikels/single/{{$data->slug}}" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i><</a></p> 
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End --> 
                        </div>
                         @endforeach
                    </article>
                </div>
                <!-- Single Articles End -->
            </div>

            <div class="row">
               
            </div>
        </div>
    </div>
    <!--== Car List Area End ==-->



<!--== Testimonials Area Start ==-->
<section id="testimonial-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Testimoni</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>
     @php
     $testimonis = App\testimonis::all();
     @endphp
            <div class="row">
                
                <div class="col-lg-8 col-md-12 m-auto">
                
                    <div class="testimonial-content">
                        <!--== Single Testimoial Start ==-->
                        @foreach($testimonis as $data)
                        <div class="single-testimonial">
                            
                        <p>{!!$data->testimoni!!}</p>    
                        <h3>{{$data->nama}}</h3>
                        <span>Konsumen</span>
                            <div class="client-logo">
                                <img src=" {{ asset ('assets/img/testimoni/' .$data->gambar. '' ) }}" alt="JSOFT">
                            </div>
                        </div>
                        @endforeach
                        <!--== Single Testimoial End ==-->
                    </div>
                    
                </div>
                
            </div>
        </div>


            <!--== About Page Content Start ==-->
    <!--== Page Title Area Start ==-->
   <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Tentang</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
<section>
            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                            <p>Keys'Audio adalah perusahaan Indonesia yang berbasis di Bandung; berada di kawasan pusat bisnis Indonesia memungkinkan sumber daya yang lebih baik untuk menjangkau pelanggan kami, oleh karena itu kami dapat mengirim barang ke sebagian besar wilayah dan distrik.

Tujuan kami adalah untuk membawa barang-barang berkualitas tinggi dengan harga yang tidak mengecewakan bagi pelanggan kami.
Kami menawarkan berbagai macam suku cadang mobil dan aksesoris dari merek mobil populer seperti TOYOTA, MITSUBISHI, ISUZU, FORD, DAIHATSU, SUZUKI, TIMOR, HONDA, HINO, PROTON dan NISSAN.

Kami bangga dengan profesionalisme dan kemampuan kami untuk memenuhi kebutuhan pelanggan kami. Pertanyaan atau pertanyaan apa pun diterima dengan sangat baik.

Mengapa harga kami sangat rendah?
Harga kami sangat rendah karena kami juga sebagian adalah bisnis grosir, oleh karena itu kami membeli produk kami dalam jumlah besar yang memungkinkan harga lebih murah. Dengan segera menjangkau pelanggan kami, kami juga dapat menghindari bisnis yang meningkatkan harga produk, memungkinkan pelanggan kami menikmati barang-barang berkualitas tinggi dengan harga lebih murah.

Kenapa kita bisa diandalkan?
Kami dapat diandalkan karena banyak layanan yang kami tawarkan yang untuk keamanan pelanggan kami.
Kami menggunakan TIKI, layanan pengiriman Indonesia yang terkenal.

    - Transfer Bank BCA - yang akan ditindaklanjuti dengan konfirmasi email pembayaran.

Kami juga menawarkan jaminan uang kembali 30 hari, yang berarti bahwa jika pelanggan tidak sepenuhnya puas dengan yang baik mereka hanya perlu mengirim kembali dan kami akan mentransfer kembali pembayaran.</p>        
                        </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="assets/img/1234.jpg" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
</section>

 <section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Contact</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    
                </div>
            </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15841.598170704096!2d107.58347701089623!3d-6.962105469924527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8d8b90b85cb%3A0x73777db2049f19ff!2sJl.+Terusan+Cibaduyut+No.94%2C+Cangkuang+Kulon%2C+Dayeuhkolot%2C+Bandung%2C+Jawa+Barat+40239!5e0!3m2!1sid!2sid!4v1539241105297" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <div class="single-footer-widget">
                           <ul class="get-touch">
                                        <li><i class="fa fa-map-marker"></i> KOTA Bandung</li>
                                        <li><i class="fa fa-mobile"></i> +62 838 1818 3250</li>
                                        <li><i class="fa fa-envelope"></i> keysaudio@gmail.com</li>
                                </ul>
                            </div>
                            </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->
    </section>
<!--== Footer Area Start ==-->
<section id="footer-area">
    <!-- Footer Widget Start -->
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</section>
<!--== Footer Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
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

</html>