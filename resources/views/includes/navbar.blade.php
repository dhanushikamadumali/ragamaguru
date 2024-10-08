<nav class="navbar navbar-expand-lg navbar-light header-sticky shadow-sm">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/logos/' . app(\App\Http\Controllers\CompanySettingController::class)->getCompanyLogo()) }}"
            style="width:auto; height:35px;" class="mt-4" alt="Company Logo">
    </a>
    <div class="d-flex order-lg-last">
        <ul class="navbar-right">
            <div class="mt-4 btn-container" style="margin-right:20px; ">
                <a href="{{ route('goToProfile') }}" class="btn btn-primary btn-custom" style="padding: 7px 10px;color: #fff;font-size:12px;">PROFILE</a>
            </div> 
            <div class="mt-4 btn-container" style="margin-right:20px; ">
                <a href="{{ route('login') }}" class="btn btn-primary btn-custom" style="padding: 7px 10px;color: #fff;font-size:12px;">SIGN IN</a>
            </div>
        
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Entrance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('bookingInfo')}}">Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('store') }}">Online Store</a>
            </li>
        </ul>
    </div>
</nav>
<!-- /.End of navbar -->
