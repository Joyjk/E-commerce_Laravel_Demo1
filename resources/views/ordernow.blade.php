@extends('master')
@section('content')

<div class=" custom-product" style="height: auto;">

        <div class="col-sm-10">

        <table class="table table-dark">

                <tbody>
                    <tr>

                    <td>Amount</td>
                    <td>{{$total}}</td>

                    </tr>
                    <tr>

                    <td>Tex</td>
                    <td> 0 </td>

                    </tr>
                    <tr>

                    <td>Delivery</td>
                    <td> $10</td>

                    </tr>

                    <tr>

                    <td>Total amount</td>
                    <td> {{$total + 10}}</td>

                    </tr>

                </tbody>
        </table>

        </div>

        <div class="col-sm-10">
            <form action="/orderplace" method="POST">
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Delivery address</label>
                    <textarea type="text" name="address" class="form-control" id="exampleInputEmail1"  placeholder="Address"></textarea>

                </div>
                <div class="form-group">
                    <h4 for="exampleInputPassword1">Payment</h4>
                    <br>


                    <input type="radio" class="" value="cash" name="paymentType"> <span>Cash on Delivery</span>
                    <br>
                    <br>
                    <input type="radio" class="" value="Bkash" name="paymentType"> <span>Bkash</span>
                    <br>
                    <br>
                    <input type="radio" class="" value="Nogod" name="paymentType"> <span>Nogod</span>
                    <br>
                    <br>

                    <input type="radio" class="" value="Visa" name="paymentType"> <span>Visa</span>
                    <br>
                    <br>
                    <input type="radio" class="" value="Mastercard" name="paymentType"> <span>Mastercard</span>
                    <br>
                    <br>



                </div>

                <button style="margin-bottom: 40px;" type="submit" class="btn btn-primary">Order now</button>
            </form>

        </div>
</div>


@endsection
