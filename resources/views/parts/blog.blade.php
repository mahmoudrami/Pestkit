
        <!-- Blog Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Blog</h5>
                    <h1 class="display-5">Latest Blog & News</h1>
                </div>
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay=".5s">
                    @foreach ($blogs as $one)
                    <div class="blog-item">
                        <img src="{{ $one->image_path }}" class="img-fluid w-100 rounded-top" alt="">
                         <div class="rounded-bottom bg-light">
                            <div class="d-flex justify-content-between p-4 pb-2">
                                <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>{{ $one->user->name }}</span>
                                <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>{{ $one->created_at->format('d M, Y') }}</span>
                            </div>
                            <div class="px-4 pb-0">
                                <h4>{{ $one->title }}</h4>
                                <p>{{ $one->content }}</p>
                            </div>
                            <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                                <a href="{{ Route('page.blogs') }}" type="button" class="btn btn-primary border-0">Learn More</a>
                                <a href="{{ route('page.blogs') }}" class="my-auto btn-primary border-0"><i class="fa fa-comments me-2"></i><span>{{ $one->comments_count }}</span> Comments</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Blog End -->
