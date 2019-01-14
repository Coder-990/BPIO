@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($companies as $company)
    <tr>
      <td><?= $company->id ?></td>
      <td><?= $company->PINcompany ?></td>
      <td><?= $company->company_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection