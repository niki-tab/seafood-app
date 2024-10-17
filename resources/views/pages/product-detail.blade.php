@extends('layouts.app')

@section('content')
        @livewire('product-detail', ['productSlug' => request()->route('productSlug')])
        @livewire('product-information-tab')
@endsection

@metadata

