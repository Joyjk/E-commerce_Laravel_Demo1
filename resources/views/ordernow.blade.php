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
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Delivery address</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </textarea>

                </div>
                <div class="form-group">
                    <h4 for="exampleInputPassword1">Payment</h4>
                    <br>


                    <input type="radio" class="" name="paymentType"> <span>cash on Delivery</span>
                    <br>
                    <br>
                    <input type="radio" class="" name="paymentType"> <span>Bkash</span>
                    <br>
                    <br>
                    <input type="radio" class="" name="paymentType"> <span>Nogod</span>
                    <br>
                    <br>

                    <input type="radio" class="" name="paymentType"> <span>Bkash</span>
                    <br>
                    <br>
                    <input type="radio" class="" name="paymentType"> <span>Bkash</span>
                    <br>
                    <br>



                </div>

                <button style="margin-bottom: 40px;" type="submit" class="btn btn-primary">Order now</button>
            </form>

        </div>
</div>


@endsection
