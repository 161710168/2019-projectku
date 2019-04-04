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
 @foreach($recent as $data)
                            <div class="sidebar-body">
                                <ul class="recent-tips">
                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="{{ asset('assets/img/artikel/'.$data->gambar. '') }}" alt=""></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="/artikels/single/{{$data->slug}}"> {{ $data->judul }}</a></h4>
                                            <p>
                                            {{ $data->created_at->diffForHumans() }}
                                            </p>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>
                                </ul>
                                @endforeach    
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

    