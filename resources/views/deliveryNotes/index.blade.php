@extends('layouts.app')

@section('content')

 <a class="btn btn-primary float-right" href="/deliveryNotes/new">New</a>

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
  @foreach ($deliveryNotes as $deliveryNote)
    <tr>
      <td><?= $deliveryNote->id ?></td>
      <td><?= $deliveryNote->delivery_note_date ?></td>
      <td><?= $deliveryNote->company->company_name ?></td>  
      <td><a href="/deliveryNotes/delete/{{$deliveryNote->id}}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection