<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 
    <div class="container">
    
    <h1 class="text-center">Inventoris</h1>
    <a type="button" href="/tambahbarang"  class="btn btn-secondary">Tambah+</a>
    @if($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
      {{ $message }}
    </div>
    @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Description</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>

  @php
  $no = 1;
  @endphp
    @foreach($data as $row)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $row->name }}</td>
      <td>{{ $row->quantity }}</td>
      <td>{{ $row->description }}</td>
      <td>
          <img src="{{ asset('fotopegawai/'.$row->foto) }}" alt="gambar" style=" width:40px; ">
      </td>
      <td> 
        <a href="/tampilkandata/{{ $row->id }}" class="btn btn-success">Edit</a>
        <a href="/delete/{{ $row->id }}"  class="btn btn-warning">Delete</a>
    </td>
    </tr>
    @endforeach
  

        <div class="row">

        </div>
    </div>
  </tbody>
</table>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>
  
</html>