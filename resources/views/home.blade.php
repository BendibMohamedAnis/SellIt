@extends('layouts.app')

@section('content')
<div style="margin: 0%;padding:0%;background-color:#F7770F;">
    <div class="container d-flex pt-5" style="width:100%;height:300px; border-radius:2em;margin-left:auto; ">
        <img src="/assets/specs01.png" alt="logo" >
        <div class="offer_info p-5" style="color:white;">
            <h6>23 january 2023</h6>
            <h1>Poco M3 Pro</h1>
            <p>Under the hood, the Poco M3 Pro is powered by a MediaTek Dimensity 700 chipset, which is paired with 4GB or 6GB of RAM depending on the variant. This ensures that the phone can handle most apps and games without any lag or stuttering. The phone also runs on MIUI 12, which is Xiaomi's custom Android skin.

                </p>
        </div>
        
    </div>

</div>

<div style="      
    aspect-ratio:960/193.05;
    width: 100%;
    margin-top:-110px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;  background-image: url('/assets/wave.svg');
   
    ">
</div>

<div class="row justify-content-around p-4 mb-5" style="width:auto;margin:auto;  ">
    @foreach($products as $product)
        <div class="col-3 p-3 shadow p-3 mb-5 bg-white rounded " >
            <div class="image" style="position: relative;">
                <img class="w-100 rounded" style="height:200px" src="data:image/png;base64,{{ chunk_split(base64_encode($product->image)) }}"/>
                <div class="top-left" style="position: absolute;top: 8px;left: 3px;">
                    <p class="rounded p-1" style="background-color:red;margin-left:10px;color:aliceblue; ">- {{$product->promo}} %</p>
                </div>
            </div>
            <p class=" p-1">{{$product->price}}$</p>
            <div class="d-flex" style="margin-top: -10px">
                <h4 style="margin-left:3px;">{{$product->name}}</h4>
                <button type="button" class="btn btn-success" style="margin-left:auto;">Add</button>
            </div>
        </div>
    @endforeach


    
        
</div>

@endsection
