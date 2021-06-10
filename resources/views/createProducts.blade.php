@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New Product</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{route('dashboard')}}">Back</a>
</div>
</div>
</div>
<form action="{{ route('product.store') }}" method="POST">

 @csrf
 
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Name:</strong>
 <input type="text" name="name" class="form-control" placeholder="name">
 </div>
 </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Model no:</strong>
 <input type="number" name="modelno" class="form-control" placeholder="modelno">
 </div>
 </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 {{ csrf_field() }}
 <label for="roll">Brand <span class="required">*</span></label>
				    <select name="brand_id" class="form-control" id="brand_id">
				    	<option value="">-- Select Brand --</option>
				    	@foreach ($brands as $name)
				    		<option value="{{ $name->id }}">{{ ucfirst($name->brandname) }}</option>
				    	@endforeach
				    </select>
</div>
 </div>                

 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>

 </div>
 </form>
 @endsection
