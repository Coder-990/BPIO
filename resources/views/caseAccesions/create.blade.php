@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/caseAccesions">
@csrf


<div class="form-group">
   <select class="form-control"name="good_id">
   @foreach($goods as $good)
   <option value="{{$good->id}}">{{$good->product_name}}</option>
   @endforeach
   </select>
</div>


<div class="form-group">
    <input class="form-control" name="accesion_id" type="text" placeholder="Accesion ID">
</div>
<!--
<div class="form-group">
    <input class="form-control" name="product_name" type="text" placeholder="Product name">
</div> -->
<div class="form-group">
    <input class="form-control" name="amount" type="text" placeholder="Amount">
</div>
<div class="form-group">
    <input class="form-control" name="UOM" type="text" placeholder="Unit of measure">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection
