<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accessory</title>
    <style>
    .card {
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <a href="/accessory/create4">Add accessory</a>
    <h1>Our accessory that available :</h1>
    <div>
        @foreach($accessory as $accessory)
            <div class="card">
                <div>
                    <img src="{{asset('storage/images/'. $accessory->namePicture)}}" style="width: 25%; height: auto; object-fit: cover;">
                </div>
                    <div style="padding:10px">
                        <div>Type: {{$accessory->type}}</div>
                        <div>Size: {{$accessory->size}}</div>
                        <div>Color: {{$accessory->color}}</div>
                        <div>Price: {{$accessory->price}}</div>
                        <div>Description: {{$accessory->description}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div><br><br>

    <h4>If You want To See which one is the most expensive than the other Click on button bellow</h4>
    <button>
        <a href="/accessory/compare">Compare</a>
    </button>
</body>
</html>