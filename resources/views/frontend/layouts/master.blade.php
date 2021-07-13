@php
    $setting 		= \App\Models\Setting::find(1);
    $articles 		= \App\Models\Article::where('status', 1)->get();
@endphp

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        
	 <!-- Favicon -->
		@if($setting->website_favicon != null || !empty($setting->website_favicon))
			<link rel="shortcut icon" type="image/x-icon" href="{{$setting->website_favicon}}">
		@else
			<link rel="shortcut icon" type="image/x-icon" href="/assets/admin/img/favicon.png">
		@endif
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    </head>
    <body>
        

        @include('frontend.layouts.header')

        <div class="content-wrapper py-5">
            @yield('content')
        </div>

        @include('frontend.layouts.footer')







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>