@extends('layouts.app')

@section('content')

<form method="post" action="/companies">

@csrf

<div class="form-group">
    <input class="form-control" name="PINcompany" type="text" placeholder="PIN Company">
</div>
<div class="form-group">
    <input class="form-control" name="company_name" type="text" placeholder="Company Name">
</div>

<button type="submit" class="btn btn-success">Submit</button>

</form>

@endsection
