@extends('layouts.app')

@section('content')
    @include('partials.home.hero')
    @include('partials.home.quick-access')
    @include('partials.home.about')
    @include('partials.home.departments')
    @include('partials.home.why-choose-us')
    @include('partials.home.doctors')
    @include('partials.home.services')
    @include('partials.home.testimonials')
    @include('partials.home.blog')
    @include('partials.home.appointment-cta')
@endsection
