@extends('layouts.app')

@section('content')
        @livewire('product-detail', ['productId' => request()->route('productId')])
@endsection