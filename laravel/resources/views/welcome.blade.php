<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0!important;
            }
            .container {
            width: 100%;
            padding: 10px;
            }

            .toppane {
            width: 100%;
            height: 50vh;
            background-position: center center;
            background-image: url('{{URL('/images/Clothes.png')}}');
            background-size: cover;
            background-position: center;
            }
            #clothes{
                color:white;
                padding: 15px;
            }

            .leftpane {
            width: 50%;
            height: 110vh;
            }
            #shoes{
            background-image: url('{{URL('/images/Shoes.jpg')}}');
            background-size: cover;
            background-position: center;
            color:white;
            padding: 15px;
            }
            #hats{
            background-image: url('{{URL('/images/hats.jpg')}}');
            background-size: cover;
            background-position: center;
            color:white;
            padding: 15px;
            }

            .rightpane {
            width: 50%;
            height: 110vh;
            background-color: yellow;
            }
            #pants{
            background-image: url('{{URL('/images/Pants.jpg')}}');
            background-size: cover;
            background-position: center;
            padding: 15px;
            }
            #Accessory{
            background-image: url('{{URL('/images/Accessory.jpg')}}');
            background-size: cover;
            background-position: center;
            padding: 15px;
            }
            .d-flex {
            display: flex;
            }

        </style>
    </head>
    <body>
        <h1 style="text-align:center;">Welcome To Our Shop</h1>
        <div class="container">
            <div class="toppane" id="clothes">
            <!-- <img src="{{URL('/images/clothes.jpg')}}" /> -->
                Click
                <a style="color:skyblue;" href="http://127.0.0.1:8000/clothes">here</a>
                to see our Clothes
            </div>
            <div class="d-flex">
                <div class="leftpane" id="shoes">
                Click
                    <a style="color:skyblue;" href="http://127.0.0.1:8000/shoes">here</a>
                    to see our Shoes
                </div>
                <div class=" rightpane"  id="pants">
                Click
                    <a style="color:red" href="http://127.0.0.1:8000/pants">here</a>
                    to see our Pants
                </div>
            </div>
            <div class="d-flex">
                <div class="leftpane" id="hats">
                Click
                    <a style="color:skyblue;" href="http://127.0.0.1:8000/hats">here</a>
                    to see our Hats
                </div>
                <div class=" rightpane" id="Accessory">
                Click
                    <a style="color:red" href="http://127.0.0.1:8000/accessory">here</a>
                    to see our Accessory
                </div>
            </div>
        </div>
    </body>
</html>
