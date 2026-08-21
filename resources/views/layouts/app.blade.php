<!DOCTYPE html>
<html lang="en" class="h-full antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Maruti Multispeciality Hospital | Bhopal')</title>
    <meta name="description" content="@yield('meta_description', 'Maruti Multispeciality Hospital on Raisen Road, Bhopal, provides multispeciality hospital care and is open 24 hours.')">
    <meta name="keywords" content="Maruti Multispeciality Hospital, Hospital in Bhopal, Raisen Road Hospital, Patel Nagar, Healthcare">
    
    <meta property="og:title" content="Maruti Multispeciality Hospital | Bhopal">
    <meta property="og:description" content="Multispeciality hospital care on Raisen Road, Bhopal. Open 24 hours.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="Maruti Hospital">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/maruti-hospital-logo.png') }}">
    <link rel="icon" type="image/png" sizes="256x256" href="{{ asset('images/maruti-hospital-icon.png') }}">

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Hospital',
            'name' => config('hospital.name'),
            'url' => url('/'),
            'telephone' => config('hospital.phone.href'),
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Vardhmaan Colony, B-21, Raisen Rd, near Dada Ji Dham, Patel Nagar',
                'addressLocality' => 'Bhopal',
                'addressRegion' => 'Madhya Pradesh',
                'postalCode' => '462022',
                'addressCountry' => 'IN',
            ],
            'openingHours' => 'Mo-Su 00:00-23:59',
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => config('hospital.rating'),
                'reviewCount' => config('hospital.review_count'),
                'bestRating' => '5',
            ],
            'sameAs' => [config('hospital.maps_url')],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col">
    @include('partials.topbar')
    @include('partials.header')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.mobile-app-bar')
</body>
</html>
