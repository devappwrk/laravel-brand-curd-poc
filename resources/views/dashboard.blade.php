<x-app-layout >
    @extends('layout')
     @section('content')
    <div style="text-align: center; margin-top:20px margin-bottom:20px">
    <h1>PHONE BRAND CRUD</h1>
    </div>
    <div style="display:flex">
   
    <a class="btn btn-success" style="margin-left:-200px; margin-bottom:20px" href="{{ route('brand.create') }}">Create New Brand</a>
    <a class="btn btn-success" style="margin-left:480px; margin-bottom:20px" href="{{ route('product.create') }}">Create New Products</a>
   
    </div>
    </div>
    @if($message = Session::get('success'))
    <div class='alert alert-success'>
    <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered">
     <tr>
     <th>Serial no.</th>
     <th>Product Name</th>
     <th>Model Number</th>
     <th>Brand</th>
     <th width="280px">Action</th>
     </tr>
    
     @foreach ($product as $pro)
     <tr>
         <td>{{ ++$i }}</td>
         <td>{{ $pro->name }}</td>
         <td>{{ $pro->modelno }}</td>
         <td>{{ $pro->brands[0]->brandname }}</td>
         <td>
         <form action="{{ route('product.destroy', $pro->id) }}" method="POST">
           <a class="btn btn-info" href="{{ route('product.show', $pro->id) }}">Show</a>
           <a class="btn btn-primary" href="{{ route('product.edit', $pro->id) }}">Edit</a>
           @csrf
           @method('DELETE')
           <button type="submit" class="btn btn-danger">Delete</button>
           </form>
           </td>
        </tr>
        @endforeach
        </table>

    @endsection
   
</x-app-layout>
