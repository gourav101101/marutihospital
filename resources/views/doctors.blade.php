@extends('layouts.app')

@section('title', 'Our Specialists - Maruti Hospital')

@section('content')
  @include('partials.home.doctors', ['showAllDoctors' => true])
@endsection
