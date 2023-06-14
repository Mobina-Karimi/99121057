<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hats</title>
    <style>
    .card {
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <a href="/hats/create3">Add hats</a>
    <h1>Our hats that available :</h1>
    <div>
        @foreach($hats as $hats)
            <div class="card">
                <div>
                    <img src="{{asset('storage/images/'. $hats->namePicture)}}" style="width: 25%; height: auto; object-fit: cover;">
                </div>
                    <div style="padding:10px">
                        <div>Type: {{$hats->type}}</div>
                        <div>Size: {{$hats->size}}</div>
                        <div>Color: {{$hats->color}}</div>
                        <div>Price: {{$hats->price}}</div>
                        <div>Description: {{$hats->description}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div><br><br>

    <h4>If You want To See which one is the most expensive than the other Click on button bellow</h4>
    <button>
        <a href="/hats/compare">Compare</a>
    </button>
</body>
</html>