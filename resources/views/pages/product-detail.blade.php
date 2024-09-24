@extends('layouts.app')

@section('content')
        @livewire('product-detail', ['productSlug' => request()->route('productSlug')])
@endsection