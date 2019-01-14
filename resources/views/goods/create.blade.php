@extends('layouts.app')

@section('content')

<form method="post" action="/goods">
@csrf

<div class="form-group">
    <input class="form-control" name="product_name" type="text" placeholder="product_name">
</div>
<div class="form-group">
    <input class="form-control" name="amount" type="text" placeholder="amount">
</div>
<div class="form-group">
    <input class="form-control" name="price" type="text" placeholder="price">
</div>
<div class="form-group">
    <input class="form-control" name="describe" type="text" placeholder="describe">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection
