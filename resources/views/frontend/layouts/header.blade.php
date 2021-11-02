		<div class="header text-white py-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col">
                        <a href="{{ route('home') }}">
                            <img src="{{ $setting->logo_white }}" alt="{{ $setting->title }}" style="width: 100px;"  onerror="this.src='{{ asset('assets/admin/img/logo.svg') }}';">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="http://buynoir.co" class="text-reset text-decoration-none fw-bold"><svg class="align-baseline" width="12" height="12" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><g stroke="#FFF" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M11.5 6.73v6.77H.5v-11h7.615M4.5 9.5l7-7M13.5 5.5v-5h-5"></path></g></svg> Go to Buynoir</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4 class="mt-3 mb-0">Advice and answers from the Buynoir Team</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form action="{{ route('search') }}" method="GET" class="search-box mt-4">
                            <input type="search" class="form-control" placeholder="Search for articles..." name="q" required>
                            <button type="submit" class="btn"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>