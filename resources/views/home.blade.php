@extends('layouts.app')

@section('content')


<div style="margin: 0%;padding:0%;background-color:#F7770F;">
    <div class="row d-flex pt-5 justify-content-around" style="width:100%;height:300px; border-radius:2em;margin-left:auto; ">
        <img class="img-fluid  col-5 col-sm-6 col-md-4 col-lg-3 h-100" src="/assets/specs01.png" alt="logo"  >
        <div class="col-5 col-sm-6 col-md-4 col-lg-6 my-auto" style="color:white;">
            <h4 style="font-size: 2vw;">23 january 2023</h4>
            <h3 style="font-size: 3vw;">Poco M3 Pro</h3>
            <p style="font-size: 1vw;">Under the hood, the Poco M3 Pro is powered by a MediaTek Dimensity 700 chipset, which is paired with 4GB or 6GB of RAM depending on the variant. This ensures that the phone can handle most apps and games without any lag or stuttering. The phone also runs on MIUI 12, which is Xiaomi's custom Android skin.</p>
        </div>
    </div>
</div>

<div class="row w-100" 
    style="      
        aspect-ratio:960/193.05;
        width: 100%;
        margin-top:-110px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;  background-image: url('/assets/wave.svg');
    
        ">
</div>

<div class="card-group p-4 justify-content-around " >
    <div class="row justify-content-around">
        @foreach($products as $product) 
            @for ($i = 0; $i <= 3; $i++)
            <div class="card  m-3 p-3 border" style="height:450px; max-width:300px; overflow:hidden;width: 18rem;">
                <img  style="height:200px;object-fit: cover;"   src="data:image/png;base64,{{ chunk_split(base64_encode($product->image)) }}" alt="image">
                <p class="mt-2"> {{$product->price}} $</p>
                <h3 class=" card-title ">{{$product->name}}</h3>
                <p class=" card-text">{{$product->description}}</p>
                @guest
                    <button class="btn btn-success btn-sm  " disabled style="width: 30%; margin-left:auto;">Add</button>
                @else
                <form class="form-inline" style="display:flex;" action="{{ route('additem') }}" method="POST">
                    @csrf
                        <input class="form-control form-control-sm" name="quantity" style="width:20%" type="number" value="1" min="1" oninput="validity.valid||(value='');" >
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <button class="btn btn-success btn-sm" style="width: 30%; margin-left:auto;" type="submit">Add</button>
                </form>
                @endif
                <div class="card-footer mt-3">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            @endfor
        @endforeach
        
    </div>
</div>



@endsection
