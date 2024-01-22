@extends('layouts.app')

@section('buy-section')
<section id="buyRow">
    <div class="container d-flex justify-content-center p-5">
        <div class="d-flex align-items-center">
        
            @foreach ($clients as $client)
            <div class="text-center ps-5 pe-2">
                <img class="buy-img" src="{{ $client["image"] }}" alt="">
                <div class="mt-2">
                    <h3 class="buy-text">{{ strtoupper($client["title"]) }}</h3>
                </div>
            </div>
            @endforeach

        </div>
    </div>




</section>

@endsection
