        <!-- pricing Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Pricing</h5>
                    <h1 class="display-5 w-50 mx-auto">Affordable Pricing Plan For Pest Control Services</h1>
                </div>
                <div class="row g-5">
                    @foreach ($pricing as $one)
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="rounded bg-light pricing-item   ">
                            <div class="bg-primary py-3 px-5 text-center rounded-top border-bottom border-dark"
                            @if($one->name == 'Standerd') style="background-color:black !important; border-color : #fdf001 !important" @endif>
                                <h2 class="m-0" @if($one->name == 'Standerd') style="color: #fdf001 !important;" @endif>{{ $one->name }}</h2>
                            </div>
                            <div class="px-4 py-5 text-center bg-primary pricing-label mb-2"
                            @if($one->name == 'Standerd') style="background-color:black !important;" @endif>
                                <h1 class="mb-0" @if($one->name == 'Standerd') style="color: #fdf001 !important;" @endif>${{ $one->price }}<span class="text-secondary fs-5 fw-normal">/mo</span></h1>
                                <p class="mb-0" @if($one->name == 'Standerd') style="color: white !important;" @endif>Basic Pest Control</p>
                            </div>
                            <div class="p-4 text-center fs-5">
                                {{-- @dd(json_decode($one->name)) --}}
                                @foreach (json_decode($one->features) as $item)
                                <p><i class="fa fa-check text-success me-2"></i>{{ $item }}</p>
                                @endforeach
                                {{-- <h1>{{ json_decode($one->disadvantages)[0] != null }}</h1> --}}
                                @if (json_decode($one->disadvantages)[0] != null > 0)
                                    @foreach (json_decode($one->disadvantages) as $item)
                                    <p><i class="fa fa-check text-danger me-2"></i>{{ $item }}</p>
                                    @endforeach
                                @endif

                                <a href="{{ route('Services') }}"><button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-3">Get Started</button></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Pricing End -->
