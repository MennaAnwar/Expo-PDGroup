@extends('layouts.app')

@section('title', $slug)

@section('content')
    @php
        $viewPath = str_replace('/', '.', $slug);
    @endphp
    
    @include('products.' . $viewPath)
@endsection