<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>E-Commerce Project</title>
</head>
<body>

    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}







    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>

    </script>
    <style>
        .custom-login{
            height: 500px;
            padding-top: 100px;
        }
        img.slider-img{
                height: 350px !important;
        }
        .custom-product{
            height: 550px;
        }
        .carousel-control-next-icon, .carousel-control-prev-icon{
            background: blue no-repeat center center;
        }
        .trending-image{
            height: 100px;
        }

        .trending-item{
            float: left;
            width: 20%;
        }

        .trending-wrapper{
            margin: 30px;
        }

        .detail-img{
            height: 200px;
        }
        .search-box{
            width: 500px !important;
        }
        .cart-list-divider{
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
    </style>
</body>
</html>
