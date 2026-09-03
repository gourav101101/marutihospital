@extends('layouts.app')

@section('title', 'Our Specialists - Maruti Hospital')
@section('meta_description', 'Meet the experienced doctors and medical specialists at Maruti Hospital Bhopal providing patient-first care across various departments.')

@section('content')
  <section class="page-hero">
    <div class="container">
      <div class="breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="separator">/</span>
        <span style="color: white;">Our Specialists</span>
      </div>
      <h1>
        Our <span style="color: var(--primary-light);">Specialists</span>
      </h1>
      <p>
        Experienced clinicians focused on thoughtful, patient-first care.
      </p>
    </div>
  </section>

  @include('partials.home.doctors', ['showAllDoctors' => true])
@endsection
