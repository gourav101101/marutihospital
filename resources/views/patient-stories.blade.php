@extends('layouts.app')
@section('title','Patient Stories - Maruti Hospital')
@section('content')
<section class="page-hero"><div class="container"><div class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="separator">/</span><span style="color:white">Patient Stories</span></div><h1>Patient Stories</h1><p>Feedback shared on the Maruti Multispeciality Hospital Google listing.</p></div></section>
@include('partials.home.testimonials', ['testimonials' => $testimonials])
<div style="padding:24px 0 60px;background:var(--primary)"><div class="container">{{ $testimonials->links() }}</div></div>
@endsection
