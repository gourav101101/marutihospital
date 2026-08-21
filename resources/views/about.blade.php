@extends('layouts.app')

@section('title', 'About Maruti Multispeciality Hospital - Bhopal')
@section('meta_description', 'Learn about Maruti Multispeciality Hospital on Raisen Road in Bhopal, open 24 hours for patients and families.')

@section('content')
  <section class="page-hero">
    <div class="container">
      <div class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="separator">/</span><span style="color:white">About Us</span></div>
      <h1>About <span style="color:var(--primary-light)">Maruti Hospital</span></h1>
      <p>Multispeciality hospital care for patients and families in Bhopal.</p>
    </div>
  </section>

  <section style="padding:100px 0;background:var(--bg-white)">
    <div class="container">
      <div class="about-story-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center">
        <div>
          <div class="section-badge">Our Hospital</div>
          <h2 class="section-title">Care close to home <span style="color:var(--primary)">in Bhopal</span></h2>
          <p style="font-size:16px;color:var(--text-secondary);line-height:1.8;margin-bottom:20px">Maruti Multispeciality Hospital is located in Vardhmaan Colony on Raisen Road, near Dada Ji Dham in Patel Nagar, Bhopal. The hospital is open 24 hours.</p>
          <p style="font-size:16px;color:var(--text-secondary);line-height:1.8;margin-bottom:32px">Patients can request appointments online or call the hospital directly for guidance about visiting, available care and next steps.</p>
          <div style="display:flex;gap:16px;flex-wrap:wrap">
            <a href="{{ route('appointment') }}" class="btn btn-primary">Book Appointment</a>
            <a href="tel:{{ config('hospital.phone.href') }}" class="btn btn-outline">Call {{ config('hospital.phone.display') }}</a>
          </div>
        </div>
        <div style="position:relative">
          <img src="{{ asset('images/hospital-interior.png') }}" alt="Maruti Multispeciality Hospital patient care area" style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl)" />
          <a href="{{ config('hospital.outside_view_url') }}" target="_blank" rel="noopener noreferrer" style="position:absolute;bottom:18px;right:18px;padding:12px 18px;border-radius:999px;background:white;color:var(--primary);font-size:13px;font-weight:800;text-decoration:none;box-shadow:var(--shadow-md)">See outside ↗</a>
        </div>
      </div>
    </div>
  </section>

  <section style="padding:90px 0;background:var(--primary);color:white">
    <div class="container">
      <div class="about-facts" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px">
        <a href="{{ config('hospital.maps_url') }}" target="_blank" rel="noopener noreferrer" style="padding:32px;text-align:center;border:1px solid rgba(255,255,255,.2);border-radius:var(--radius-lg);color:white;text-decoration:none;background:rgba(255,255,255,.06)"><div style="font-size:36px;font-weight:900;color:var(--accent)">{{ config('hospital.rating') }} ★</div><div style="margin-top:8px">{{ config('hospital.review_count') }} Google reviews</div></a>
        <div style="padding:32px;text-align:center;border:1px solid rgba(255,255,255,.2);border-radius:var(--radius-lg);background:rgba(255,255,255,.06)"><div style="font-size:34px;font-weight:900;color:var(--accent)">24 Hours</div><div style="margin-top:8px">Open Monday through Sunday</div></div>
        <a href="{{ config('hospital.directions_url') }}" target="_blank" rel="noopener noreferrer" style="padding:32px;text-align:center;border:1px solid rgba(255,255,255,.2);border-radius:var(--radius-lg);color:white;text-decoration:none;background:rgba(255,255,255,.06)"><div style="font-size:34px;font-weight:900;color:var(--accent)">Bhopal</div><div style="margin-top:8px">Raisen Road · Get directions</div></a>
      </div>
    </div>
  </section>

  <section style="padding:100px 0;background:var(--bg-light)">
    <div class="container">
      <div style="text-align:center;margin-bottom:56px"><div class="section-badge" style="margin:0 auto 16px">Our Approach</div><h2 class="section-title">Care built around <span style="color:var(--primary)">patients and families</span></h2></div>
      <div class="care-values" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px">
        <article style="padding:36px;background:white;border:1px solid var(--border-light);border-radius:var(--radius-xl)"><h3 style="font-size:20px;margin-bottom:12px">Respectful care</h3><p style="color:var(--text-secondary);line-height:1.7;margin:0">Every patient deserves dignity, attentive listening and clear communication.</p></article>
        <article style="padding:36px;background:white;border:1px solid var(--border-light);border-radius:var(--radius-xl)"><h3 style="font-size:20px;margin-bottom:12px">Clear guidance</h3><p style="color:var(--text-secondary);line-height:1.7;margin:0">Our goal is to help patients and families understand the next step in their care.</p></article>
        <article style="padding:36px;background:white;border:1px solid var(--border-light);border-radius:var(--radius-xl)"><h3 style="font-size:20px;margin-bottom:12px">Accessible support</h3><p style="color:var(--text-secondary);line-height:1.7;margin:0">The hospital remains open 24 hours and can be contacted directly by phone.</p></article>
      </div>
    </div>
  </section>

  <section style="padding:100px 0;background:var(--bg-white)">
    <div class="container">
      <div style="text-align:center;margin-bottom:48px"><div class="section-badge" style="margin:0 auto 16px">Visit Us</div><h2 class="section-title">Find Maruti Hospital on <span style="color:var(--primary)">Raisen Road</span></h2><p class="section-subtitle" style="margin:0 auto">{{ config('hospital.address') }}</p></div>
      <div style="border-radius:var(--radius-xl);overflow:hidden;border:1px solid var(--border-light);box-shadow:var(--shadow-md)"><iframe src="{{ config('hospital.map_embed_url') }}" width="100%" height="420" style="border:0;display:block" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" title="Maruti Multispeciality Hospital location"></iframe></div>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;margin-top:28px"><a href="{{ config('hospital.directions_url') }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Get Directions</a><a href="{{ config('hospital.outside_view_url') }}" target="_blank" rel="noopener noreferrer" class="btn btn-outline">See Outside</a><a href="{{ config('hospital.maps_url') }}" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Read Google Reviews</a></div>
    </div>
  </section>

  <style>
    @media(max-width:968px){.about-story-grid{grid-template-columns:1fr!important;gap:40px!important}.about-facts,.care-values{grid-template-columns:1fr!important}}
  </style>
@endsection
