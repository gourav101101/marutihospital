<!DOCTYPE html>
<html lang="en" class="h-full antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', $siteSettings->hospital_name . ' | Bhopal')</title>
    <meta name="description" content="@yield('meta_description', $siteSettings->hospital_name . ' on Raisen Road, Bhopal, provides multispeciality hospital care and is open 24 hours.')">
    <meta name="keywords" content="{{ $siteSettings->hospital_name }}, Hospital in Bhopal, Raisen Road Hospital, Patel Nagar, Healthcare">
    
    <meta property="og:title" content="{{ $siteSettings->hospital_name }} | Bhopal">
    <meta property="og:description" content="Multispeciality hospital care on Raisen Road, Bhopal. Open 24 hours.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="{{ $siteSettings->hospital_name }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/maruti-hospital-logo.png') }}">
    <link rel="icon" type="image/png" sizes="256x256" href="{{ asset('images/maruti-hospital-icon.png') }}">

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Hospital',
            'name' => $siteSettings->hospital_name,
            'url' => url('/'),
            'telephone' => $siteSettings->phone_href,
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
                'ratingValue' => $siteSettings->google_rating,
                'reviewCount' => $siteSettings->google_review_count,
                'bestRating' => '5',
            ],
            'sameAs' => [$siteSettings->maps_url],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col">
    {{-- Page Preloader --}}
    <div id="page-preloader" style="position: fixed; inset: 0; z-index: 99999; background: white; display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 20px; transition: opacity 0.4s ease, visibility 0.4s ease;">
      <img src="{{ asset('images/maruti-hospital-icon.png') }}" alt="" width="72" height="72" style="animation: preloaderPulse 1.2s ease-in-out infinite;" />
      <div style="width: 48px; height: 48px; border: 3px solid var(--primary-100); border-top-color: var(--primary); border-radius: 50%; animation: preloaderSpin 0.8s linear infinite;"></div>
    </div>

    @include('partials.announcement-bar')
    @include('partials.topbar')
    @include('partials.header')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.mobile-app-bar')

    {{-- Back to Top Button --}}
    <button id="back-to-top" aria-label="Back to top" type="button" style="position: fixed; bottom: 100px; right: 24px; z-index: 990; width: 48px; height: 48px; border-radius: 50%; background: var(--primary); color: white; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 20px rgba(4,60,80,0.3); opacity: 0; visibility: hidden; transform: translateY(12px); transition: all 0.3s ease;">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="18 15 12 9 6 15" /></svg>
    </button>

    {{-- WhatsApp Floating Button --}}
    <a href="https://wa.me/{{ str_replace(['+', ' '], '', $siteSettings->phone_href) }}?text=Hello%2C%20I%20would%20like%20to%20enquire%20about%20Maruti%20Hospital%20services."
       target="_blank" rel="noopener noreferrer"
       id="whatsapp-float"
       aria-label="Chat on WhatsApp"
       style="position: fixed; bottom: 36px; right: 24px; z-index: 990; width: 56px; height: 56px; border-radius: 50%; background: #25D366; color: white; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 16px rgba(37,211,102,0.4); text-decoration: none; transition: transform 0.3s ease, box-shadow 0.3s ease;"
       onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 24px rgba(37,211,102,0.5)'"
       onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 16px rgba(37,211,102,0.4)'">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
    </a>

    {{-- Preloader + Back-to-Top Scripts --}}
    <style>
      @keyframes preloaderPulse { 0%, 100% { transform: scale(1); opacity: 1; } 50% { transform: scale(1.08); opacity: 0.7; } }
      @keyframes preloaderSpin { to { transform: rotate(360deg); } }
      @keyframes whatsappPulse { 0% { box-shadow: 0 0 0 0 rgba(37,211,102,0.5); } 70% { box-shadow: 0 0 0 14px rgba(37,211,102,0); } 100% { box-shadow: 0 0 0 0 rgba(37,211,102,0); } }
      #whatsapp-float { animation: whatsappPulse 2.5s infinite; }
      #whatsapp-float:hover { animation: none; }
      @media (max-width: 768px) {
        #back-to-top { bottom: 156px !important; right: 16px !important; width: 42px !important; height: 42px !important; }
        #whatsapp-float { bottom: 96px !important; right: 16px !important; width: 50px !important; height: 50px !important; }
      }
    </style>
    <script>
      // Preloader
      window.addEventListener('load', function() {
        var preloader = document.getElementById('page-preloader');
        if (preloader) {
          preloader.style.opacity = '0';
          preloader.style.visibility = 'hidden';
          setTimeout(function() { preloader.remove(); }, 500);
        }
      });
      // Fallback: remove after 4s even if load hasn't fired
      setTimeout(function() {
        var preloader = document.getElementById('page-preloader');
        if (preloader) { preloader.style.opacity = '0'; preloader.style.visibility = 'hidden'; setTimeout(function() { preloader.remove(); }, 500); }
      }, 4000);

      // Back to Top
      (function() {
        var btn = document.getElementById('back-to-top');
        if (!btn) return;
        window.addEventListener('scroll', function() {
          if (window.scrollY > 400) {
            btn.style.opacity = '1'; btn.style.visibility = 'visible'; btn.style.transform = 'translateY(0)';
          } else {
            btn.style.opacity = '0'; btn.style.visibility = 'hidden'; btn.style.transform = 'translateY(12px)';
          }
        });
        btn.addEventListener('click', function() {
          window.scrollTo({ top: 0, behavior: 'smooth' });
        });
      })();
    </script>
</body>
</html>
