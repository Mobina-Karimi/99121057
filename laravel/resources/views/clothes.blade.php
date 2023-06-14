<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes</title>

    <style>
    .card {
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <a href="/clothes/create">Add clothes</a>
    <h1>Our clothes that available :</h1>
    <div>
        @foreach($clothes as $clothes)
            <div class="card">
                <div>
                    <img src="{{asset('storage/images/'. $clothes->namePicture)}}" style="width: 25%; height: auto; object-fit: cover;">
                </div>
                    <div style="padding:10px">
                        <div>Type: {{$clothes->type}}</div>
                        <div>Color: {{$clothes->color}}</div>
                        <div>Price: {{$clothes->price}}</div>
                        <div>Description: {{$clothes->description}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div><br><br>

    <h4>If You want To See which one is the most expensive than the other Click on button bellow</h4>
    <button>
        <a href="/clothes/compare">Compare</a>
    </button>
</body>
</html>