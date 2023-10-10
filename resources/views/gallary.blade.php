@extends('layouts.front')

@section('content')
<style>
    /* Custom Pagination Styles */
    nav svg{
        width:20px !important;
    }
    nav p{
        padding-top: 10px; 
        text-align: center;
    }
</style>
    <div class="container py-3">
        <div class="row">
            <h5>Image Gallary</h5>
        </div>
        <div class="row py-3 g-4">
            @foreach ($images as $item)
                <div class="col-md-3">
                    <img src="{{$item->url}}" alt="" class="w-100">
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-end">

                {{$images->links()}}
            </div>
        </div>
    </div>
@endsection
