@extends('master')
@section('content')

<div class=" " >

        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3>My Orders</h3>
                <!-- <a href="/ordernow" class="btn btn-success" style="margin-bottom: 50px;">Order now</a> -->
                <div class="">

                @foreach($orders as $item)
                    <div class="row searched-item cart-list-divider" >
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->gallery}}" alt="First slide">
                            </a>
                        </div>

                        <div class="col-sm-3" >
                            <div class=""  >
                                <h4 >Name : {{$item->name}}</h4>
                                <p > Description : {{$item->description}}</p>
                                <p > Address : {{$item->address}}</p>
                                <p > Payment Method : {{$item->payment_method}}</p>
                                <p > Payment Status : {{$item->payment_status}}</p>


                            </div>
                        </div>








                    </div>
                @endforeach

                <!-- <a href="/ordernow" class="btn btn-success" style="margin-bottom: 50px;">Order now</a> -->
                </div>



            </div>
        </div>
</div>


@endsection
