@extends('layouts.HeaderFooter')
<link rel="stylesheet" href="{{ asset('../css/app2.css') }}">
@section('content')
    <div class="container">
        <div class="all-body">
            <div class="content-img">
                <img src="/products/{{ $product->image }}" alt="">

                <div class="content-text">
                    <p>Name: <b>{{ $product->name }}</b></p>
                    <p>Description: <b>{{ $product->description }}</b></p>
                </div>

            </div>

    

            <div class="sidebar">
                <h2>Liên Hệ</h2>
                <p>Name: <b>{{ $product->name }}</b></p>
                <p>Description: <b>{{ $product->description }}</b></p>

                <button class="phone">0999999999</button>
                <button class="caraudit">Car Audit</button>
            </div>

        </div>
    </div>


@endsection