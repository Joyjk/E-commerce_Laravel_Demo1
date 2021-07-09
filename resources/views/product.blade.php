@extends('master')
@section('content')
<div class=" custom-product">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($products as $item)
                <div class="carousel-item {{$item['id']==1?'active':''}}">
                <img class="d-block w-100 slider-img" src="{{$item['gallery']}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color: #FFFFFF;">{{$item['name']}}</h5>
                    <p>{{$item['description']}}</p>
                </div>
                </div>
            @endforeach
            <!-- <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon"  aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
</div>
@endsection


