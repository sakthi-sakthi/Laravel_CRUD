@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center>
                <h2>Edit Details</h2>
                </center>
            </div>
            
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <div class="pull-right">
            <a class="btn btn-danger" href="{{ route('products.index') }}">Back</a>
        </div>
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
          <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Email</strong>
                <input type="email" class="form-control"  name="email" placeholder="Email" required></textarea>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Password</strong>
                <input type="password" class="form-control"  name="password" placeholder="Password" required></textarea>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Place</strong>
                <input type="text" class="form-control"  name="place" placeholder="Place" required></textarea>
            </div>
        </div>

                 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <br>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </div>
   
    </form>
@endsection