    <section id="slider_section" class="slider_section">
        <div class="row my-3">
            <div class="col-lg-3 col-md-3 col-sm-0">

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div id="lead_slider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#lead_slider" data-slide-to="0" class="active"></li>
                        <li data-target="#lead_slider" data-slide-to="1"></li>
                        <li data-target="#lead_slider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                       @foreach ($slider as $row)

                        <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                            <img src="{{ asset('frontend/images/SliderImage/'.$row->image) }}" alt="{{ $row->name }}" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>{{ $row->title }}</h4>
                                <h1>{{ $row->subtitle }}</h1>
                                <button><a href="{{ $row->button_link }}">Get Now</a></button>
                            </div>
                        </div>

                        @endforeach
                        
                        
                    </div>
                    <a class="carousel-control-prev" href="#lead_slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#lead_slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-12 pr-5">

                <div class="join_signin text-center">
                    <img class="img-fluid text-center" src="assets/img/icon/signin.png">
                    <p class="mt-2">Welcome to Bafdo</p>
                    <button><a href="">Join</a></button><button><a href="">Sign In</a></button>
                </div>
                <div class="fastest_delivery my-3">
                    <div class="row">
                        <div class="col-4">
                            <img class="img-fluid mt-3" src="assets/img/icon/fastest_delivery.png">
                        </div>
                        <div class="col-8">
                            <h5>Faster Delivery</h5>
                            <p>All over Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="android_apple">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="row">

                                <div class="col-3"><img class="img-fluid pl-4" src="assets/img/icon/android.png"></div>
                                <div class="col-9"><a href="">Better shopping</a></div>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">

                                <div class="col-3"><img class="img-fluid pl-4" src="assets/img/icon/apple.png"></div>
                                <div class="col-9"><a href="">Download the app</a> </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>