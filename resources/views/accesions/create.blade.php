@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/accesions">
@csrf

<div class="form-group">
   <select class="form-control" name="company_id">
   @foreach($companies as $company)
   <option value="{{$company->id}}">{{$company->company_name}}</option>
   @endforeach
   </select>
</div>

<div class="form-group">
    <input class="form-control" name="accesion_date" type="date" placeholder="Accesion Date">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection
