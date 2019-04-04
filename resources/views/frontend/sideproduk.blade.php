<!-- Sidebar Area Start -->
<div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>For More Informations</h3>

                            <div class="sidebar-body">
                                <p><i class="fa fa-mobile"></i> +8801816 277 243</p>
                                <p><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</p>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->
                        <div class="single-sidebar">
                            <h3>Recent Post</h3>
        <div class="blog-list ">
            @foreach($recent as $data)
            <div class="single-recent-post d-flex flex-row">
                <div class="recent-thumb">
                    <img class="img-fluid" src="{{ asset ('assets/img/barang/' .$data->gambar. '' ) }}" style="margin-top: 10px; max-width: 150px; max-height: 150px;" alt="">
                </div>
                <div class="recent-tip-body">
                    <a href="/produks/singleproduk/{{ $data->slug }}">
                        <br>
                        <p>
                            {{ $data->nama_barang }}
                        </p>
                    </a>
                    <p>
                            <i class="fa fa-heart" aria-hidden="true"></i>&nbsp Rp.{{ $data->harga }}</a>
                        </p>
                    <p>
                        {{ $data->created_at->diffForHumans() }}
                    </p>
                    
                        <br>
                </div>
            </div>  
            @endforeach                                                                            
        </div>                              
    </div>
</div>
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Connect with Us</h3>

                            <div class="sidebar-body">
                                <div class="social-icons text-center">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                <!-- Sidebar Area End -->

    