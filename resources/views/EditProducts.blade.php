@extends('layout')

@section('content')

<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Product</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('dashboard')}}">Back</a>
</div>
</div>
</div>

@if($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input. <br><br>
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ route('product.update', $product['id']) }}" method="POST">

@csrf 
@method('PUT')

<div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Name:</strong>
 <input type="text" value="{{ $product['name'] }}" name="name" class="form-control" placeholder="name">
 </div>
 </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Model no:</strong>
 <input type="number" value="{{ $product['modelno'] }}" name="modelno" class="form-control" placeholder="modelno">
 </div>
 </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 {{ csrf_field() }}
 <label for="roll">Brand <span class="required">*</span></label>
				    <select name="brand_id" class="form-control" id="brand_id">
				    	<option value="{{ $product[0] }}">{{ $product[0] }}</option>
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
