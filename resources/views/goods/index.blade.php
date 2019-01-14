@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/goods/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Describe</th>
      <th scope="col">Amount</th>
      <th scope="col">UOM</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($goods as $good)
    <tr>
      <td><?= $good->id ?></td>
      <td><?= $good->product_name ?></td>
      <td><?= $good->describe ?></td>
      <td><?= $good->amount ?></td>
      <td><?= $good->UOM ?></td>
      <td><?= $good->price ?></td>
      <td><a href="/goods/delete/{{$good->id}}" class="btn btn-sm btn-danger">X</a></td>
    </tr> 
  @endforeach
  </tbody>
</table>

@endsection