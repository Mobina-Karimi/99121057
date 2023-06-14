<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pants</title>
    <style>
    .card {
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <a href="/pants/create2">Add pants</a>
    <h1>Our pants that available :</h1>
    <div>
        @foreach($pants as $pants)
            <div class="card">
                <div>
                    <img src="{{asset('storage/images/'. $pants->namePicture)}}" style="width: 25%; height: auto; object-fit: cover;">
                </div>
                    <div style="padding:10px">
                        <div>Type: {{$pants->type}}</div>
                        <div>Size: {{$pants->size}}</div>
                        <div>Color: {{$pants->color}}</div>
                        <div>Price: {{$pants->price}}</div>
                        <div>Description: {{$pants->description}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div><br><br>

    <h4>If You want To See which one is the most expensive than the other Click on button bellow</h4>
    <button>
        <a href="/pants/compare">Compare</a>
    </button>
</body>
</html>