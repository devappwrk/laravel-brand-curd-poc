@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New Brands</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{route('dashboard')}}">Back</a>
</div>
</div>
</div>
<form action="{{ route('brand.store') }}" method="POST">

 @csrf
 
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>BrandName:</strong>
 <input type="text" name="brandname" class="form-control" placeholder="brandname">
 </div>
 </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Website:</strong>
 <input type="text" name="website" class="form-control" placeholder="website">
 </div>
 </div>

 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>

 </div>
 </form>
 @endsection
