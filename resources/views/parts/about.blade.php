
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">{{ @$page }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a href="{{ route('homePage') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('Pages') }}">Pages</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">{{ @$page }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
