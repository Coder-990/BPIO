@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/caseDeliveryNotes/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Delivery Note ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($caseDeliveryNotes as $caseDeliveryNote)
    <tr>
      <td><?= $caseDeliveryNote->id ?></td>
      <td><?= $caseDeliveryNote->deliveryNote->id ?></td>
      <td><?= $caseDeliveryNote->good->product_name ?></td>
      <td><?= $caseDeliveryNote->good->amount ?></td>    
      <td><a href="/caseDeliveryNotes/delete/{{$caseDeliveryNote->id}}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection