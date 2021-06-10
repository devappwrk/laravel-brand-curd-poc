@extends('layout')

@section('content')

<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>View Product Details</h2>
</div>
</div>
</div>



<form>


<div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Name:</strong>
 <input type="text" disabled value="{{ $product['name'] }}" name="name" class="form-control" placeholder="name">
 </div>
 </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Model no:</strong>
 <input type="number" disabled value="{{ $product['modelno'] }}" name="modelno" class="form-control" placeholder="modelno">
 </div>
 </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 {{ csrf_field() }}
 <label for="roll">Brand <span class="required">*</span></label>				   
<input type="text" class="form-control" disabled value="{{ $product[0] }}">
</div>
 </div>                

 <div style="margin-left:450px">
<a class="btn btn-primary" href="{{ route('dashboard')}}">Back</a>
</div>

 </div>
 </form>
@endsection
