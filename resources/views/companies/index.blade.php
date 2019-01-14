@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/companies/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PINCompany</th>
      <th scope="col">Company Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  

  @foreach ($companies as $company)
    <tr>
      <td><?= $company->id ?></td>
      <td><?= $company->PINcompany ?></td>
      <td><?= $company->company_name ?></td>
      <td><a href="/companies/delete/{{$company->id}}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach

  </tbody>
</table>

@endsection