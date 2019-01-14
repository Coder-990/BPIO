@extends('layouts.app')

@section('content')

 <a class="btn btn-primary float-right" href="/accesions/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Company</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
  @foreach ($accesions as $accesion)
    <tr>
      <td><?= $accesion->id ?></td>
      <td><?= $accesion->accesion_date ?></td>
      <td><?= $accesion->company->company_name ?></td>
      <td><a href="/accesions/delete/{{$accesion->id}}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection