@extends('layouts.app')

@section('content')

 <a class="btn btn-primary float-right" href="/caseAccesions/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Accesion ID</th>   
      <th scope="col">Product Name</th>
      <th scope="col">Amount</th> 
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($caseAccesions as $caseAcceesion)
    <tr>
      <td><?= $caseAcceesion->id ?></td>
      <td><?= $caseAcceesion->accesion->id ?></td>
      <td><?= $caseAcceesion->good->product_name ?></td>
      <td><?= $caseAcceesion->good->amount ?></td>  
      <td><a href="/caseAccesions/delete/{{$caseAcceesion->id}}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection