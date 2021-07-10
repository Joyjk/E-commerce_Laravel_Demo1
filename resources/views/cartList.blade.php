@extends('master')
@section('content')

<div class=" custom-product">

        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3>Result product</h3>
                <a href="/ordernow" class="btn btn-success" style="margin-bottom: 50px;">Order now</a>
                <div class="">

                @foreach($products as $item)
                    <div class="row searched-item cart-list-divider" >
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->gallery}}" alt="First slide">
                            </a>
                        </div>

                        <div class="col-sm-3" >
                            <div class="">
                                <h4 >{{$item->name}}</h4>
                                <p >{{$item->description}}</p>
                            </div>
                        </div>

                        <div class="col-sm-3" >
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                        </div>





                    </div>
                @endforeach

                <a href="/ordernow" class="btn btn-success" style="margin-bottom: 50px;">Order now</a>
                </div>



            </div>
        </div>
</div>


@endsection
