@php
    $setting = \App\Models\Setting::find(1);
@endphp

        <div class="footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">   
                        <img src="{{ asset($setting->logo_white)}}" alt="{{ $setting->title }}" style="width: 100px;"  onerror="this.src='{{ asset('assets/admin/img/logo.svg') }}';">
                        <ul class="list-unstyled mt-3 mb-0 footer-social-media">
                            
                            @if ($setting->facebook)
                                <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            @endif

                            @if ($setting->twitter)
                                <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            @endif

                            @if ($setting->linkedin)
                                <li><a href="{{ $setting->linkedin }}"><i class="fab fa-linkedin"></i></a></li>
                            @endif

                            @if ($setting->instagram)
                                <li><a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>