<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Products - Salman Wiharja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background: aliceblue">
  <div class="container my-5">
    <div class="row">
      <div class="col-md-12">
        <div>
          <h2 class="text-center my-4">DATA PRODUCTS</h2>
        </div>
        <h6 class="text-center">
          <a href="https://linkedin.com/in/salman-wiharja" target="_blank" type="button" class="btn btn-info">
            By Salman
          </a>
        </h6>
        <hr>
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <a href="{{ route('products.create') }}" class="btn btn-md btn-success mb-3">
              ADD PRODUCT
            </a>
            <table class="table table-bordered">
              <thead>
                <tr class="text-center">
                  <th scope="col">IMAGE</th>
                  <th scope="col">TITLE</th>
                  <th scope="col">PRICE</th>
                  <th scope="col">STOCK</th>
                  <th scope="col" style="width: 20%">ACTIONS</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($products as $product)
                  <tr>
                    <td class="text-center">
                      <img src="{{ asset('storage/products/'.$product->image) }}" class="rounded" style="width: 150px">
                    </td>
                    <td class="text-start">{{ $product->title }}</td>
                    <td class="text-end">Rp{{ number_format($product->price,0,',','.') }}</td>
                    <td class="text-center">{{ $product->stock }}</td>
                    <td class="text-center">
                      <form onsubmit="return confirm('Are you sure?')" action="{{ route('products.destroy', $product->id) }}" method="POST">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-primary mx-1 my-1">SHOW</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning mx-1 my-1">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger mx-1 my-1">DELETE</button>
                      </form>
                    </td>
                  </tr>
                @empty
                  <div class="alert alert-danger">
                    Data product not found!
                  </div>
                @endforelse
              </tbody>
            </table>
            {{ $products->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.all.min.js"></script>

  <script>
    //message with sweetalert
    @if(session('success'))
      Swal.fire({
        icon: 'success',
        title: 'SUCCESS',
        text: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 1500
      })
    @elseif(session('error'))
      Swal.fire({
        icon: 'error',
        title: 'ERROR!',
        text: "{{ session('error') }}",
        showConfirmButton: false,
        timer: 1500
      })
    @endif
  </script>
</body>
</html>