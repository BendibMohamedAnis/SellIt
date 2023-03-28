@extends('layouts.app')
@section('content')
<div class="contrainer-md">
    <div class="row m-1 justify-content-around ">
        @foreach ($product_names as $index => $product_name)
            <div class="col-lg-10 border m-3 d-flex p-3"  >
                <img  class="img-responsive rounded m-1" src="data:image/jpeg;base64,{{ $product_images[$index] }}" alt="img" style="height: 150px; width:150px;">

                <div class="m-2 w-100 my-auto" >
                    <h2>  {{ $product_names[$index]}}</h2>
                    <p>Quantity : {{ $product_quantities[$index] }}</p>
                    <p class="text-success fw-bold">Total :  {{ $product_quantities[$index]*$product->price }} $</p>
                </div>

                <div class="text-center my-auto " style="">
                    <button class="btn btn-success mb-4 " >Order </button>
                    <button class="btn btn-danger " >Delete</button>
                </div>

            </div>
        @endforeach
    </div>
</div>

@endsection