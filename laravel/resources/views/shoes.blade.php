<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoes</title>
    <style>
    .card {
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <a href="/shoes/create1">Add shoes</a>
    <h1>Our shoes that available :</h1>
    <div>
        @foreach($shoes as $shoes)
            <div class="card">
                <div>
                    <img src="{{asset('storage/images/'. $shoes->namePicture)}}" style="width: 25%; height: auto; object-fit: cover;">
                </div>
                    <div style="padding:10px">
                        <div>Type: {{$shoes->type}}</div>
                        <div>Size: {{$shoes->size}}</div>
                        <div>Color: {{$shoes->color}}</div>
                        <div>Price: {{$shoes->price}}</div>
                        <div>Description: {{$shoes->description}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div><br><br>

    <h4>If You want To See which one is the most expensive than the other Click on button bellow</h4>
    <button>
        <a href="/shoes/compare">Compare</a>
    </button>
</body>
</html>