@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center>
                <h2>Details</h2>
                </center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}">Add New Member</a>
            </div>
        </div>
    </div>
   <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Place</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->email }}</td>
            <td>{{ $product->place }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection