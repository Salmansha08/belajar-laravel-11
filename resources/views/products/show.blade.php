<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Show Products - Salman Wiharja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: aliceblue">
  <div class="container my-5">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center my-4">SHOW DATA PRODUCT</h2>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <img src="{{ asset('storage/products/'.$product->image) }}" class="rounded mx-auto d-block" style="width: 100%">
          </div>
        </div>
      </div>
      <div class="col-md-8 mb-3">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <h3>{{ $product->title }}</h3>
            <hr/>
            <h5>{{ "Rp" . number_format($product->price,0,',','.') }}</h5>
            <code>
              <p>{!! $product->description !!}</p>
            </code>
            <hr/>
            <h6>STOCK : {{ $product->stock }}</h6>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
      </div>
    </div>
  </div>
</body>
</html>